<?php
$servername="localhost";
$database="pokedex";
$username="root";
$password="";

$conn = mysqli_connect($servername,$username,$password,$database);

$nombrePokemon = isset( $_POST["nombre"])?$_POST["nombre"] : "";
$imagenTipo = isset( $_FILES["imagenTipo"])?$_FILES["imagenTipo"] : "";
$imagenPokemon = isset( $_FILES["imagenPokemon"])?$_FILES["imagenPokemon"] : "";
$numero = isset( $_POST["numero"])?$_POST["numero"] : "";

$imagenPokemon="images/".$_FILES["imagenPokemon"]["name"];
$imagenTipo="images/".$_FILES["imagenTipo"]["name"];


if(!$conn){
    die("connection failed:" . mysqli_connect_error());
}
mysqli_query($conn,"INSERT INTO pokemon (nombre, tipo, imagen, numero,pokemonid) VALUES('$_POST[nombre]','$imagenTipo','$imagenPokemon','$_POST[numero]','$_POST[numero]')
");

header("location:index.php");

