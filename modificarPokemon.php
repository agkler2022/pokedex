<?php
$servername = "localhost";
$database = "pokedex";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

$modificacion= isset($_GET["id"]) ? $_GET["id"] : "";

$nombrePokemon = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
$imagenTipo = isset($_FILES["imagenTipo"]) ? $_FILES["imagenTipo"] : "";
$imagenPokemon = isset($_FILES["imagenPokemon"]) ? $_FILES["imagenPokemon"] : "";
$numero = isset($_POST["numero"]) ? $_POST["numero"] : "";

$imagenPokemon = "images/" . $_FILES["imagenPokemon"]["name"];
$imagenTipo = "images/" . $_FILES["imagenTipo"]["name"];

if (!$conn) {
    die("connection failed:" . mysqli_connect_error());
}
mysqli_query($conn, "UPDATE pokemon SET nombre='$nombrePokemon', imagen='$imagenPokemon',tipo='$imagenTipo',numero='$numero' WHERE numero='$modificacion'");

header("location:index.php");


