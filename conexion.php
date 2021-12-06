<?php
$server = "localhost";
$user = "buextrag_adminbd";
$password = "Adminbbdd9826#";
$db = "buextrag_mejoras";

$conexion = new mysqli($server, $user, $password, $db);
if($conexion->connect_error){
  die("La conexion ha fallado" . $conexion->connect_error);
}