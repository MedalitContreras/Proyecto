<?php
$db = new mysqli('localhost','root','','proyecto');
if($db->connect_errno)
{
    die("Error al conectar : ".$db->connect_error);
}

$id = $_POST['id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];

$result = $db->query("UPDATE persona SET nombres='{$nombres}',apellidos='{$apellidos}',edad='{$edad}',direccion='{$direccion}',correo='{$correo}' WHERE id='{$id}'");

if(!$result){
    die("Error al consultar: ".$db->error);
}

header("location:index.php");

?>