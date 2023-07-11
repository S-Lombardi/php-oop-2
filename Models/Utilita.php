<?php

    //Creo la classe Utilità, figlia di Prodotto
    class Utilita extends Prodotto{
        public $materiale;
        public $dimensioni;
   
        function __construct($immagine, $nome, $animale, $prezzo, $icona, $materiale, $dimensioni ){
            //Richiamo il costruttore del genitore
            parent::__construct($immagine, $nome, $animale, $prezzo, $icona);
            $this-> materiale = $materiale;
            $this-> dimensioni = $dimensioni;
        }   
        
        public function getMateriale(){
			return $this-> materiale;
		}

        public function getDimensioni(){
			return $this-> dimensioni;
		}

    }
?>