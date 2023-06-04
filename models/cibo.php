<?php 

include_once __DIR__ . '/prodotti.php';

class Cibo extends Prodotti{
    public $calorie;

    function __construct($_categoria, $_nome, $_prezzo, $_descrizione, $_immagine, $_calorie){

        parent::__construct($_categoria, $_nome, $_prezzo, $_descrizione, $_immagine);
        $this->calorie = $_calorie;
    }
}

$crocchette = new Cibo( new Categoria(1, 'cane'), 'crocchette', '20euro', 'laalallala', 'img', '20kcal');
var_dump($crocchette);

?>