<?php session_start();
error_reporting(E_ALL);
ob_start();
session_destroy();

header("Location: index.php?mensaje='Finalizado con exito");
		exit;

?>