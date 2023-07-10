<?php
    class Cibo extends Prodotto{
        public $peso;
        public $ingredienti;
    }

    function __construct($immagine, $nome, $animale, $prezzo, $peso, $ingredienti){
        parent::__construct($immagine, $nome, $animale, $prezzo);
    }    


?>