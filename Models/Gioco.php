<?php

    //Creo la classe Giochi, figlia di Prodotto
    class Gioco extends Prodotto{
        public $caratteristiche;
        public $dimensioni;
   
        function __construct($immagine, $nome, $animale, $prezzo, $caratteristiche, $dimensioni){
            //Richiamo il costruttore del genitore
            parent::__construct($immagine, $nome, $animale, $prezzo);
            $this-> caratteristiche = $caratteristiche;
            $this-> dimensioni = $dimensioni;
        }   
        
        public function getPeso(){
			return $this-> caratteristiche;
		}

        public function getIngredienti(){
			return $this-> dimensioni;
		}

    }
?>