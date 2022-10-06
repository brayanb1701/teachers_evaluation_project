
<?php 
//-- variables para conectarse a la base de datos
session_start();
error_reporting(E_ALL);
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Evaluación</title>

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
                                <li><a href="instructors.php">Evaluacion</a></li>
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

     

    <!-- ##### Instructors Video Start ##### -->
    <div class="instructors-video d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg4.jpg);">
        <h2>Hora de calificar a tus profesores</h2>
        <!-- video btn 
        <a href="https://www.youtube.com/watch?v=qC_T9ePzANg" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a> -->
    </div>
    <!-- ##### Instructors Video End ##### -->
<form action="conexion2.php" method="post">
    <!-- ##### Best Tutors Area Start ##### -->
    <section class="best-tutors-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Selecciona el profesor a calificar a continuación</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="tutors-slide owl-carousel">
						 <?php
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
$sql= "SELECT codigo,nombre,materia "
		."FROM ".$base_datos.".".$tabla;
		$sql = mysqli_query($conexion,$sql);
		while($rs = mysqli_fetch_array($sql)) { 
		 echo '<!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="img/bg-img/'.$rs[0].'.png" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5><input type="radio"  id="$rs[0]" name="cod_doc" value="'.$rs[0].'"><br>'.$rs[1].'</h5>
                                <span>Profesor</span>
                                <p><strong>Materia(s):</strong> <br>'.$rs[2].'</p>
                                
                            </div>
                        </div>' ; 
		   
}
}		   
		   ?>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Best Tutors Area End ##### -->

    <!-- ##### Top Teacher Area Start ##### -->
    <section class="top-teacher-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Responde las siguientes preguntas de acuerdo al desempeño del profesor a calificar (1-Bajo 3-Intermedio 5-Alto).</h3>
                    </div>
                </div>
            </div>

          <div class="blog-details-content ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
				<!-- P -->
                    <div class="blog-details-text">
                        
                        <h5 class="text-center py-4">Pregunta 1.</h5>
                        <p>Aquí va la pregunta 1</p>
						<center><input type="radio" id="p1" name="p1" value="1">1.  &nbsp;&nbsp; <input type="radio" id="p1" name="p1" value="3">3.   &nbsp;&nbsp; <input type="radio" id="p1" name="p1" value="5">5. </center>
                        
                    </div>
					
				
				<!-- P -->
                    <div class="blog-details-text">
                        
                        <h5 class="text-center py-4">Pregunta 2.</h5>
                        <p>Aquí va la pregunta 2</p>
						<center><input type="radio" id="p2" name="p2" value="1">1.  &nbsp;&nbsp; <input type="radio" id="p2" name="p2" value="3">3.   &nbsp;&nbsp; <input type="radio" id="p2" name="p2" value="5">5. </center>
                        
                    </div>
					
				<!-- P -->
                    <div class="blog-details-text">
                        
                        <h5 class="text-center py-4">Pregunta 3.</h5>
                        <p>Aquí va la pregunta 3</p>
						<center><input type="radio" id="p3" name="p3" value="1">1.  &nbsp;&nbsp; <input type="radio" id="p3" name="p3" value="3">3.   &nbsp;&nbsp; <input type="radio" id="p3" name="p3" value="5">5. </center>
                        
                    </div>
					
					
					<!-- P -->
                    <div class="blog-details-text">
                        
                        <h5 class="text-center py-4">Pregunta 4.</h5>
                        <p>Aquí va la pregunta 4</p>
						<center><input type="radio" id="p4" name="p4" value="1">1.  &nbsp;&nbsp; <input type="radio" id="p4" name="p4" value="3">3.   &nbsp;&nbsp; <input type="radio" id="p4" name="p4" value="5">5. </center>
                        
                    </div>
					
					
					<!-- P -->
                    <div class="blog-details-text">
                        
                        <h5 class="text-center py-4">Pregunta 5.</h5>
                        <p>Aquí va la pregunta 5</p>
						<center><input type="radio" id="p5" name="p5" value="1">1.  &nbsp;&nbsp; <input type="radio" id="p5" name="p5" value="3">3.   &nbsp;&nbsp; <input type="radio" id="p5" name="p5" value="5">5. </center>
                        
                    </div>
					
					<!-- P -->
                    <div class="blog-details-text">
                        
                        <h5 class="text-center py-4">Pregunta 6.</h5>
                        <p>6</p>
						<center><input type="radio" id="p6" name="p6" value="1">1.  &nbsp;&nbsp; <input type="radio" id="p6" name="p6" value="3">3.   &nbsp;&nbsp; <input type="radio" id="p6" name="p6" value="5">5. </center>
                        
                    </div>
					
					<!-- P -->
                    <div class="blog-details-text">
                        
                        <h5 class="text-center py-4">Pregunta 7.</h5>
                        <p>Aquí va la pregunta 7</p>
						<center><input type="radio" id="p7" name="p7" value="1">1.  &nbsp;&nbsp; <input type="radio" id="p7" name="p7" value="3">3.   &nbsp;&nbsp; <input type="radio" id="p7" name="p7" value="5">5. </center>
                        
                    </div>
					
					<!-- P -->
                    <div class="blog-details-text">
                        
                        <h5 class="text-center py-4">Pregunta 8.</h5>
                        <p>Aquí va la pregunta 8</p>
						<center><input type="radio" id="p8" name="p8" value="1">1.  &nbsp;&nbsp; <input type="radio" id="p8" name="p8" value="3">3.   &nbsp;&nbsp; <input type="radio" id="p8" name="p8" value="5">5. </center>
                        
                    </div>
					
					<!-- P -->
                    <div class="blog-details-text">
                        
                        <h5 class="text-center py-4">Pregunta 9.</h5>
                        <p>Aquí va la pregunta 9</p>
						<center><input type="radio" id="p9" name="p9" value="1">1.  &nbsp;&nbsp; <input type="radio" id="p9" name="p9" value="3">3.   &nbsp;&nbsp; <input type="radio" id="p9" name="p9" value="5">5. </center>
                        
                    </div>
					
					<!-- P -->
                    <div class="blog-details-text">
                        
                        <h5 class="text-center py-4">Pregunta 10.</h5>
                        <p>Aquí va la pregunta 10</p>
						<center><input type="radio" id="p10" name="p10" value="1">1.  &nbsp;&nbsp; <input type="radio" id="p10" name="p10" value="3">3.   &nbsp;&nbsp; <input type="radio" id="p10" name="p10" value="5">5. </center>
                        
                    </div>
					
					<!-- P -->
                    <div class="blog-details-text">
                        
                        <h5 class="text-center py-4"><button class="btn clever-btn w-100">Enviar</button></h5>
                        
                        
                    </div>
						
					
                </div>
            </div>
        </div>


                
            </div>
        </div>
    </section>
    <!-- ##### Top Teacher Area End ##### -->
</form>
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="index.html"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Copywrite -->
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +44 300 303 0266</a>
                <a href="#"><span>Email:</span> info@clever.com</a>
            </div>
            <!-- Follow Us -->zz
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
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