<?php 

trait Novita{
    private $novita;

    public function getNovita(){
        return $this->novita;
    }

    public function setNovita(){
        return $this->novita = 'Nuovo arrivo!' . ' ' . date('Y-m-d');
    }
    
}

?>