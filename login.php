<?php
session_start();

$usuario = isset( $_POST["usuario"])?$_POST["usuario"] : "";
$pass = isset( $_POST["pass"])?$_POST["pass"] : "";


if ( isset($usuario) && isset($pass)){
    $_SESSION["usuario"] = $usuario;
    header("location:index.php");
    exit();
}

function validarUsuario($usuario, $pass){
    return $usuario == "admin" && $pass == "admin";
}
