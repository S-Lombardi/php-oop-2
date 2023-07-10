<?php

    //Creo la classe Cibo, figlia di Prodotto
    class Cibo extends Prodotto{
        public $peso;
        public $ingredienti;
   
        function __construct($immagine, $nome, $animale, $prezzo, $peso, $ingredienti, $icona){
            //Richiamo il costruttore del genitore
            parent::__construct($immagine, $nome, $animale, $prezzo, $icona);
            $this->peso = $peso;
            $this->ingredienti = $ingredienti;
        }   
        
        public function getPeso(){
			return $this-> peso;
		}

        public function getIngredienti(){
			return $this-> ingredienti;
		}

       
    }
?>