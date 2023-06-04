<?php 

class Categoria{
    public $code;
    public $name;

    function __construct($_code, $_name){
        $this->code = $_code;
        $this->name = $_name;
    }
}

?>