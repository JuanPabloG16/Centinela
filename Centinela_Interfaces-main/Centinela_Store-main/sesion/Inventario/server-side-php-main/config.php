<?php

//$conn = new mysqli("localhost", "root", "", "iniciosesiondb");
$dbname="iniciosesiondb";
$dbuser="root";
$dbhost="localhost";
$dbpass="";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

/* Comprobando si hay un error de conexión. */
if ($conn->connect_error) {
    die('Error de conexion ' . $conn->connect_error);
}

?>