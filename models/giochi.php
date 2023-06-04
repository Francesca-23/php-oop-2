<?php 

include_once __DIR__ . '/prodotti.php';

class Giochi extends Prodotti{
    public $materiale;

    function __construct($_categoria, $_nome, $_prezzo, $_descrizione, $_immagine, $_materiale){

        parent::__construct($_categoria, $_nome, $_prezzo, $_descrizione, $_immagine);
        $this->materiale = $_materiale;
    }
}

$gioco = new Giochi( new Categoria(1, 'cane'), 'gioco', '20euro', 'laalallala', 'img', 'cotone');
var_dump($gioco);



class Cucce extends Prodotti{
    public $dimensioni;

    function __construct($_categoria, $_nome, $_prezzo, $_descrizione, $_immagine, $_dimensioni){

        parent::__construct($_categoria, $_nome, $_prezzo, $_descrizione, $_immagine);
        $this->dimensioni = $_dimensioni;
    }
}

$cuccia = new Cucce( new Categoria(1, 'cane'), 'gioco', '20euro', 'laalallala', 'img', '3metri');
var_dump($cuccia);


class Abbigliamento extends Prodotti{
    public $stagione;
    public $taglia;

    function __construct($_categoria, $_nome, $_prezzo, $_descrizione, $_immagine, $_stagione, $_taglia){

        parent::__construct($_categoria, $_nome, $_prezzo, $_descrizione, $_immagine);
        $this->stagione = $_stagione;
        $this->taglia = $_taglia;
    }
}


?>