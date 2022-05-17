<?php
$servername="localhost";
$database="pokedex";
$username="root";
$password="";

$modificacion= isset($_GET["id"]) ? $_GET["id"] : "";
$conn = mysqli_connect($servername,$username,$password,$database);

mysqli_query($conn,"DELETE from pokemon where numero = '$modificacion'");

header("location:index.php");
