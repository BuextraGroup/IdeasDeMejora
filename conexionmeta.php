<?php
$server = "localhost";
$user = "buextrag_adminbd";
$password = "Adminbbdd9826#";
$db = "buextrag_metas";

$conexion = new mysqli($server, $user, $password, $db);
if($conexion->connect_error){
    die("La conexión ha fallado" - $conexion->connect_error);
}