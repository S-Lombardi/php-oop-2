<?php

    //Creo la classe Utilità, figlia di Prodotto
    class Utilita extends Prodotto{
        public $materiale;
        public $dimensioni;
   
        function __construct($immagine, $nome, $animale, $prezzo, $materiale, $dimensioni){
            //Richiamo il costruttore del genitore
            parent::__construct($immagine, $nome, $animale, $prezzo);
            $this-> materiale = $materiale;
            $this-> dimensioni = $dimensioni;
        }   
        
        public function getPeso(){
			return $this-> materiale;
		}

        public function getIngredienti(){
			return $this-> dimensioni;
		}

    }
?>