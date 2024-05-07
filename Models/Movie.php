<?php
include_once __DIR__ ."/Product.php";
// utilizzo la extends in modo che possa ereditare le variabili
class Movie extends Product
{
    public $lenguage;
    public function __construct($title,$lenguage,$price,$rating,$cover){
        // utilizzo parent:: per ereditare le variabili
        parent::__construct($title,$price,$rating,$cover);
        $this->lenguage = $lenguage;
    }
    public function getflag(){
        $prova = $this->lenguage;
        $flag="<img src='https://flagcdn.com/w20/{$prova}.png'>";
        return $flag;
    }
}
