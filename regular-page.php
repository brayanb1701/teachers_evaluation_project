<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Evaluacion Docente</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        

        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php"><h3>Eval. Docente</h3></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="salir.php">Salir</a></li>
                            </ul>

                            

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Regular Page Area Start ##### -->
    <div class="regular-page-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-content">
                        <h4>Resultados Evaluación Docente</h4>
                        <p>
						<center><table border="1" align="center" width="100%">
						<tr align="center"><th>Codigo</th><th>Nombre</th><th>Materia(s)</th><?php for($i=1;$i<=10;$i++){ echo "<th>Pregunta ".$i."</th>";  } ?><th>Total</th></tr>
						 <?php 
//-- variables para conectarse a la base de datos
session_start();
error_reporting(E_ALL);
ob_start();
//$_SESSION["pezmasgato"] = false;//--Variable de seguridad
$servidor	= 'localhost';
$base_datos	= 'eval_docente';
$tabla	= 'profesores';
$usr_sistema	= 'root';//$usr_sistema	= 'root';
$pass_sistema	= 'projects'; //$pass_sistema	= '';
//-- Conexion a la Base de datos segun variables declaradas 
//$conexion=mysql_connect($servidor, $usr_sistema, $pass_sistema);
date_default_timezone_set("America/Bogota");
$conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);

if (!$conexion){
header ("Location: index.php?mensaje=error de conexion.");
exit(); 
}
else{
$sql= "SELECT *"
		."FROM ".$base_datos.".".$tabla;
		$sql = mysqli_query($conexion,$sql);
		while($rs = mysqli_fetch_array($sql)) { 
		$max=$rs[14]*50;
		$preg=$rs[14]*5;
		for($i=0; $i<=13; $i++){
		if($i==0 ) echo "<tr><td align='center'>".$rs[0]."</td>";
		else if($i>0&&$i<3) echo "<td align='center'>".$rs[$i]."</td>" ;
		else if($i==13) echo "<td align='center'>".(($rs[13]/$max)*100)."%</td></tr>" ; 
         else echo "<td align='center'>".(($rs[$i]/$preg)*100)."%</td>" ;

		 }
		 }
		



}
?>
</table></center>
							</p>
							<p><form action="salir.php"><button class="btn clever-btn w-100">Salir</button></form></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Regular Page Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            Evaluacion Docente</a>
                        </div>
                        <!-- Copywrite -->
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>

        
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>