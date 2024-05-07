<?php
include_once __DIR__ ."/Product.php";
// utilizzo la extends in modo che possa ereditare le variabili
class Book extends Product
{
    public  $numPages;
    public function __construct($title,$numPages,$price,$rating,$cover){
        // utilizzo parent:: per ereditare le variabili
        parent::__construct($title,$price,$rating,$cover);
        $this->numPages = $numPages;
    }
}
