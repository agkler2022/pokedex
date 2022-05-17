<?php
$servername="localhost";
$database="pokedex";
$username="root";
$password="";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("connection failed:" . mysqli_connect_error());
}

function listar_pokemon($conn){
    return mysqli_query($conn,"Select pokemon.imagen as imagen, pokemon.tipo as tipo, pokemon.numero as numero, pokemon.nombre as nombre
from pokemon");
}

?>