<?php 
session_start();
  $mysqli = include_once "conexion2.php";

  setlocale(LC_ALL,"es_ES");
  date_default_timezone_set("America/Argentina/Cordoba");
  
  $idUsuario = $_GET['idUsuario'];
  $fechaIngreso = $_GET['fechaIngreso'];
  $fechaEgreso = $_GET['fechaEgreso'];
  $cantAdultos = $_GET['cantAdultos'];
  $cantMenores = $_GET['cantMenores'];

  $sentencia = $mysqli->prepare("INSERT INTO consultas
    (idUsuario, fechaIngreso, fechaEgreso, cantAdultos, cantMenores)
    VALUES (?, ?, ?, ?, ?)");
  $sentencia->bind_param("issii", $_SESSION['idUsuario'], $fechaIngreso, $fechaEgreso, $cantAdultos, $cantMenores);
  $sentencia->execute();

  header("Location: cabanias.php?reservarcabania=True")

 ?>