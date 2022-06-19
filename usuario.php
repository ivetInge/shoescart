<?php

// IMPORTAR CONEXION
require 'database2.php';
$db = conectarDB();

// CREAR EMAIL Y PASSWORD
$name = "Brandon";
$lastname = "Roman";
$email = "correo@correo.com";
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_DEFAULT); /* PASSWORD_BCRYPT - Igual de segura que el DEFAULT */


// QUERY PARA CREAR EL USUARIO
$query = " INSERT INTO users (name, lastname, email, password) VALUES ('${name}', '${lastname}', '${email}', '${passwordHash}'); ";
// echo $query;

// AGREGARLO A LA BASE DE DATOS
mysqli_query($db, $query);