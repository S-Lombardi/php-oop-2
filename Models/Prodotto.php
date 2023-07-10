<?php
    //Creo la classe genitore Prodotto
    class Prodotto{
        public $immagine;
        public $nome;
        public $animale;
        public $prezzo;

		public $icona;
    
        public function __construct($immagine, $nome, $animale, $prezzo, $icona){
            $this->immagine = $immagine;
            $this-> nome = $nome;
            $this-> animale = $animale;
            $this-> prezzo = $prezzo;
			$this-> icona = $icona;
        }
		
		public function getIcona(){
			return $this-> icona;
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
	//Fine classe genitore Prodotto
    

?>