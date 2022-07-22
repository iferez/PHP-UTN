<?php

include_once('db.php');
$usuario=$_POST['usuario'];
$edad=$_POST['edad'];
$email=$_POST['email'];
$comentario=$_POST['comentario'];

$conectar=conn();
$sql="INSERT INTO comentario (usuario, edad, email, comentario)
VALUES ('$usuario', '$edad', '$email', '$comentario')";
$resul = mysqli_query($conectar, $sql)or trigger_error("Query failed! SQL - Error: ".mysqli_error($conectar, $sql));

header("Location: index.php?e=ok");

?>