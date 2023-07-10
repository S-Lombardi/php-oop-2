<?php

    //Creo la classe Giochi, figlia di Prodotto
    class Gioco extends Prodotto{
        public $caratteristiche;
        public $dimensioni;
   
        function __construct($immagine, $nome, $animale, $prezzo, $caratteristiche, $dimensioni, $icona){
            //Richiamo il costruttore del genitore
            parent::__construct($immagine, $nome, $animale, $prezzo, $icona);
            $this-> caratteristiche = $caratteristiche;
            $this-> dimensioni = $dimensioni;
        }   
        
        public function getCaratteristiche(){
			return $this-> caratteristiche;
		}

        public function getDimensioni(){
			return $this-> dimensioni;
		}

    }
?>