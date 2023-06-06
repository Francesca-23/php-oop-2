<?php 

include_once __DIR__ . '/categorie.php';

class Prodotti{
    
    public $categoria;
    public $nome;
    public $prezzo;
    public $descrizione;
    public $immagine;
    public $disponibile;

    function __construct(Categoria $_categoria, $_nome, $_prezzo, $_descrizione, $_immagine, $_disponibile){
        $this->categoria = $_categoria;
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->descrizione = $_descrizione;
        $this->immagine = $_immagine;
        $this->disponibile = $_disponibile;
    }

}

?>