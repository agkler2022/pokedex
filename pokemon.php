<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location:index.php");
    exit();
}

$numero_pokemon= isset($_GET["id"]) ? $_GET["id"] : "";

$servername="localhost";
$database="pokedex";
$username="root";
$password="";

$conn = mysqli_connect($servername,$username,$password,$database);

$pokemon=mysqli_query($conn,"Select * from pokemon where numero = '$numero_pokemon'");

echo "<img class='imgPokemon' src='$pokemon[imagen]'>";
