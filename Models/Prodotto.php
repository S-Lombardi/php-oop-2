<?php
    //Creo la classe genitore Prodotto
    class Prodotto{
        public $immagine;
        public $nome;
        public $animale;
        public $prezzo;
    
        function __construct($immagine, $nome, $animale, $prezzo){
            $this->immagine = $immagine;
            $this-> nome = $nome;
            $this-> animale = $animale;
            $this-> prezzo = $prezzo;
        }
		
		public function getImg(){
			return $this-> immagine;
		}
		public function getNome(){
			return $this-> nome;
		}
		public function getAnimale(){
			return $this-> animale;
		}
		public function getPrezzo(){
			return $this-> prezzo ;
		}

	}

?>