<?php
session_start();
error_reporting(0);
include_once ("bdd.php");
$pokemones = listar_pokemon($conn);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<header>
</header>
<div class="container">
    <div class="row">
        <div class="col-1">
            <a href="index.php"><img class="logo" src="images/logo.png"></a>
        </div>
        <div class="col-5 text-center">
            <h1>Pokedex</h1>
        </div>
        <div class="col-6">
            <?php
            if(isset($_SESSION["usuario"])){
                if($_SESSION["usuario"]=="admin")
                echo
                "<div class='col-6 text-end'>
                <h4>usuario ADMIN</h4>
                </div>";
            else{
                echo
                "<div class='col-6 text-end'>
                <h4>usuario $_SESSION[usuario]</h4>
                </div>";
            }

            }
            else
                echo"<form action='login.php' method='post'>
                <input name='usuario' type='text' placeholder='Usuario'>
                <input name='pass' type='password' placeholder='Conteraseña'>
                <button type='submit'>Ingresar</button>
            </form>"
            ?>
        </div>
    </div>
    <div class="row">
        <form action="" method="post">
        <input name="pokemonBuscado" class="col-11" type="text" placeholder="Cual es su pokemon">
        <button col-1" type="submit">Buscar</button>
        </form>

    </div>


    <div class="row mt-5">
        <div class="col-2 text-center">
            <h3>Imagen</h3>
        </div>
        <div class="col-2 text-center">
            <h3>Tipo</h3>
        </div>
        <div class="col-2 text-center">
            <h3>Numero</h3>
        </div>
        <div class="col-2 text-center">
            <h3>Nombre</h3>
        </div>
        <?php
        if($_SESSION["usuario"]=="admin"){
            echo"<div class='col-4 text-center'>
                <h3>Acciones</h3>
                </div>";
        }
        ?>
    </div>

    <div class="row">
        <?php
        if(isset($_POST['pokemonBuscado'])){
            $pokemonBuscado = $_POST['pokemonBuscado'];
         $pokemones = mysqli_query($conn,"Select * from pokemon where nombre LIKE '$pokemonBuscado'");
        }
        foreach ($pokemones AS $pokemon){
            echo " <div class='row mt-5'>";
            echo " <div class='col-2 text-center'>
            <img class='imgPokemon' src='$pokemon[imagen]'>
            </div>";
            echo " <div class='col-2 text-center'>
            <img class='imgPokemon' src='$pokemon[tipo]'>
            </div>";
            echo " <div class='col-2 text-center'>
            <h3>$pokemon[numero]</h3>
            </div>";
            echo " <div class='col-2 text-center'>
            <a href='pokemon.php?id=" . $pokemon["numero"] . "'<h3>$pokemon[nombre]</h3></a>
            </div>";
            if($_SESSION["usuario"]=="admin"){
                echo" <div class='col-2 text-center'>
            <a href='modificacion.php?id=" . $pokemon["numero"] . "' >Modificacion</a>
            </div>";
                echo"
            <div class='col-2 text-center'>
            <a href='baja.php?id=" . $pokemon["numero"] . "' >Baja</a>
            </div>";

            }
            echo " </div>";
        }
        ?>
    </div>
    <div class="row">
        <?php
        if($_SESSION["usuario"]=="admin") {
            $variable = "<a href='nuevoPokemon.php'><button>Crear nuevo pokemon</button></a>";
            echo $variable;
        }
        ?>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>


