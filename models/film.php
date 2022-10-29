<?php

  class ClassFilm {


      private $title;
      private $director;
      public $genre = '';

      public $actors = [];
      public $language = '';

    
      function __construct($_title, $_director = ''){
          $this->titolo = $_title;
          $this->diretto = $_director;
      }


      public function addAttore($_actors){
          if( !in_array($_actors, $this->actors) ){
              $this->actors[] = $_actors;
          }
       
      }

  }



?>