
	
	 <?php 
//-- variables para conectarse a la base de datos
session_start();
error_reporting(E_ALL);
ob_start();
//$_SESSION["pezmasgato"] = false;//--Variable de seguridad
$servidor	= 'localhost';
$base_datos	= 'eval_docente';
$tabla	= 'evaluacion';
$usr_sistema	= 'root';//$usr_sistema	= 'root';
$pass_sistema	= 'projects'; //$pass_sistema	= '';
//-- Conexion a la Base de datos segun variables declaradas 
//$conexion=mysql_connect($servidor, $usr_sistema, $pass_sistema);
date_default_timezone_set("America/Bogota");
$conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);

$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];
$p4=$_POST['p4'];
$p5=$_POST['p5'];
$p6=$_POST['p6'];
$p7=$_POST['p7'];
$p8=$_POST['p8'];
$p9=$_POST['p9'];
$p10=$_POST['p10'];
$total=$p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9+$p10;

$cod_doc=$_POST['cod_doc'];

$fecha = date("Y-m-d");
$hora = date("H:i:s");

if (!$conexion){
header ("Location: index.php?mensaje=error de conexion.");
exit(); 
}
else{
$sql= "SELECT * "
		."FROM ".$base_datos.".".$tabla." WHERE identidad_est='".$_SESSION["contrasena"]."' AND cod_doc='".$cod_doc."'";
		
		$sql = mysqli_query($conexion,$sql);
		
		$num_rows=mysqli_num_rows($sql);
			if($num_rows!=0){
				header("Location: instructors.php?mensaje=Ya se habia calificado a este profesor.");
				
				exit;
/*				$sql = "UPDATE ".$base_datos.".".$tabla."
				SET $materia=$total
				WHERE email='".$_SESSION["email"]."'"; 
				$sql = mysqli_query($conexion, $sql); 
				$sql = "UPDATE ".$base_datos.".".$tabla."
				SET final=matematicas+lectura+sociales+ciencias+ingles
				WHERE email='".$_SESSION["email"]."'"; 
				//echo $sql;
				$sql = mysqli_query($conexion, $sql); 
	*/		} 	
		else{

			$sql = "INSERT INTO ".$base_datos.".".$tabla."(identidad_est,cod_doc)"
			." VALUES('".$_SESSION["contrasena"]."','".$cod_doc."')"; 
		  
			//$sql = mysql_query($sql, $conexion); 
   			//echo $sql;
			$sql = mysqli_query($conexion, $sql); 
			
			$sql2="UPDATE ".$base_datos.".profesores
				SET p1=p1+$p1, p2=p2+$p2, p3=p3+$p3, p4=p4+$p4, p5=p5+$p5, p6=p6+$p6, p7=p7+$p7, p8=p8+$p8, p9=p9+$p9, p10=p10+$p10, total=total+$total, n_est=n_est+1 
				WHERE codigo=".$cod_doc; 
				echo $sql2;
			$sql2 = mysqli_query($conexion, $sql2); 
			header("Location: instructors.php?mensaje=Calificacion exitosa.");
				
				exit;
		}



}
?>

