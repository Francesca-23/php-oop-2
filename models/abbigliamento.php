<?php 

include_once __DIR__ . '/prodotti.php';

class Abbigliamento extends Prodotti{
    public $taglia;

    function __construct($_categoria, $_nome, $_prezzo, $_descrizione, $_immagine, $_disponibile, $_taglia){

        parent::__construct($_categoria, $_nome, $_prezzo, $_descrizione, $_immagine, $_disponibile);
        $this->taglia = $_taglia;
    }
}

?>
