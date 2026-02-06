<?php
echo("Datos recibidos");
$ejemplo='un texto de ejemplo';
echo($ejemplo);
$correo=$_POST['correo'];
$contraseña=$_POST['pass'];
$ciudad=$_POST['ciudad'];
echo("<p>Dirección de correo : ".$correo." </p>");
echo("<p>La contraseña elegida es ".$contraseña." </p>");
echo("<p>La ciudad elegida es ".$ciudad."</p>");

$conexion=mysqli_connect("localhost","root","","test",3306);
if(!$conexion){
    echo("error de conexión");
}
echo("conexión correcta");

$insertar="INSERT INTO `usuarios` (`id`, `correo`, `password`, `ciudad`) 
VALUES (NULL, '".$correo."', '".$contraseña."', '".$ciudad."');";

$conexion->query($insertar);

echo('<p>Registro guardado</p>');