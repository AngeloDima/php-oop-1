<?php

class Movie {
    public $titolo;
    public $diretto;
    public $genere = ``;
    public $lingua = [];
    public $attore = ``;
    public $anno = ``;




    
    function __construct($_titolo){
        $this->titolo = $_titolo;
    }


    public function addGenere($_genere){
        if( in_array($_genere, $this->Genere) )
        $this->Genere[] = $_genere;
    }





}
?>