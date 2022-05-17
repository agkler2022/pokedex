<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<header>
</header>
<div class="container">
    <div class="row">
        <div class="col-1">
            <img class="logo" src="images/logo.png">
        </div>
        <div class="col-5 text-center">
            <h1>Pokedex</h1>
        </div>
        <div class="col-6">
            <form action="login.php" method="post">
                <input name="usuario" type="text" placeholder="Usuario">
                <input name="pass" type="password" placeholder="Contraseña">
                <button type="submit">Ingresar</button>
            </form>
        </div>
    </div>
    <div class="row">
        <input class="col-11" type="text" placeholder="Cual es su pokemon">
        <button class="col-1" type="submit">Buscar</button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
<?php
