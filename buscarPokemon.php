<?php
$servername="localhost";
$database="pokedex";
$username="root";
$password="";

$conn = mysqli_connect($servername,$username,$password,$database);
$nombrePokemon = isset( $_POST["nombrePokemon"])?$_POST["nombrePokemon"] : "";

if(!$conn){
    die("connection failed:" . mysqli_connect_error());
}
return buscar_pokemon($conn,$nombrePokemon){
$pokemones=mysqli_query($conn,"Select *
from pokemon
WHERE nombre='$nombrePokemon'
")
};

buscar_pokemon($nombrePokemon);

?>