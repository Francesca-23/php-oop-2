<?php 

include_once __DIR__ . '/prodotti.php';
include_once __DIR__ . '/../traits/novita.php';

class Cibo extends Prodotti{

    use Novita;
    public $calorie;

    function __construct($_categoria, $_nome, $_prezzo, $_descrizione, $_immagine, $_disponibile, $_calorie){

        parent::__construct($_categoria, $_nome, $_prezzo, $_descrizione, $_immagine, $_disponibile);
        $this->calorie = $_calorie;
    }

}

?>