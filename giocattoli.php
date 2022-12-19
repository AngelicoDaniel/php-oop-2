<?php 

include_once __DIR__ . './prodotto.php';

class Cibo extends Prodotto {

    public $caratteristiche;
    public $dimensioni;

    public function __construct(
        String $immagine,
        String $nome, 
        Float $prezzo,
        Category $category,   

        Float $caratteristiche,
        String $dimensioni
    )   {
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;
        parent::__construct($immagine, $nome, $prezzo, $category);
    }

}

?>