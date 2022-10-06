<?php 
//-- variables para conectarse a la base de datos
ini_set('session.gc_maxlifetime',3600);  // 1 hora
session_start();
error_reporting(E_ALL);
ob_start();
//$_SESSION["pezmasgato"] = false;//--Variable de seguridad
$nombre=$_POST["nombre"];

$servidor	= 'localhost';
$base_datos	= 'eval_docente';
$tabla	= 'estudiantes';
$usr_sistema	= 'root';//$usr_sistema	= 'root';
$pass_sistema	= 'projects'; //$pass_sistema	= '';
//-- Conexion a la Base de datos segun variables declaradas 
//$conexion=mysql_connect($servidor, $usr_sistema, $pass_sistema);
date_default_timezone_set("America/Bogota");
$conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);

$grado=$_POST['grado'];
$codigo	= $_POST['codigo'];//$_REQUEST['numero'];
$contrasena=$_POST['contrasena'];
$fecha = date("Y-m-d");
$hora = date("H:i:s");

if($nombre=="admin" && $grado==0 && $codigo==0 && $contrasena=="admin"){
header ("Location: regular-page.php?mensaje=Bienvenido Admin.");
exit(); 
}
else{
if (!$conexion){
header ("Location: index.php?mensaje=error de conexion.");
exit(); 
}
else{
$sql= "SELECT * "
		."FROM ".$base_datos.".".$tabla." WHERE grado=$grado AND codigo=$codigo AND contrasena='".$contrasena."'";
		
		$sql = mysqli_query($conexion, $sql);
		
		$num_rows=mysqli_num_rows($sql);
			if($num_rows!=0){
				$_SESSION["nombre"] = $nombre;
				$_SESSION["contrasena"] = $contrasena;
				header("Location: instructors.php?mensaje=Incio exitoso.");
				
				exit;
			} 	
		else{

			header ("Location: index.php?mensaje=No se ha encontrado el usuario.");
			exit(); 
		}
}
}
?>
