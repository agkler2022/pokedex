<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("location:index.php");
    exit();
}
?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<header>
</header>
<div class="container">
    <div class="row">
        <div class="col-1">
            <img class="logo" src="images/logo.png">
        </div>
        <div class="col-11 text-center">
            <h1>Pokedex</h1>
        </div>
    </div>
    <h2 class="text-center">Crea tu propio pokemon</h2>
    <div class="row">
        <form action="modificarPokemon.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                    <h4>Nombre: </h4>
                </div>
                <div class="col-6">
                    <input name="nombre" type="text">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h4>Tipo:</h4>
                </div>
                <div class="col-6">
                    <input type="file" name="imagenTipo">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h4>Imagen del pokemon:</h4>
                </div>
                <div class="col-6">
                    <input type="file" name="imagenPokemon">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h4>Numero:</h4>
                </div>
                <div class="col-6">
                    <input type="text" name="numero">
                </div>

            </div>
            <button type="submit">Crear</button>
        </form>
    </div>

<?php