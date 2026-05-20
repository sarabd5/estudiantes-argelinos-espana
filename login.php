<?php

session_start();

include("config/db.php");

if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM usuarios
WHERE email='$email'
AND password='$password'";

$resultado=$conexion->query($sql);

if($resultado->num_rows>0)
{
$_SESSION['usuario']=$email;

header("Location: dashboard.php");
}
}

?>
