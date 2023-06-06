<?php 

include_once __DIR__ . '/prodotti.php';

class Cucce extends Prodotti{
    public $dimensioni;

    function __construct($_categoria, $_nome, $_prezzo, $_descrizione, $_immagine, $_disponibile, $_dimensioni){

        parent::__construct($_categoria, $_nome, $_prezzo, $_descrizione, $_immagine, $_disponibile);
        $this->dimensioni = $_dimensioni;
    }
}

?>