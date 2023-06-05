<?php 

include_once __DIR__ . '/prodotti.php';

class Giochi extends Prodotti{
    public $materiale;

    function __construct($_categoria, $_nome, $_prezzo, $_descrizione, $_immagine, $_materiale){

        parent::__construct($_categoria, $_nome, $_prezzo, $_descrizione, $_immagine);
        $this->materiale = $_materiale;
    }
}

?>