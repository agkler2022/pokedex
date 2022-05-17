<?php

class Pokemones
{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function getCanciones(){
        return $this->database->query("SELECT * FROM pokemones");
    }

    public function getCancion($nombre){
        $SQL = "SELECT * FROM pokemones WHERE nombre = $nombre ";
        return $this->database->query($SQL);
    }
}