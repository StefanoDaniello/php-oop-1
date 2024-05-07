<?php
include __DIR__ ."/Category.php";
class Movie{
    public  string $title;
    public string $lenguage;
    public Category $category;
    public function __construct($title,$lenguage,$category){
        $this->title = $title;
        $this->lenguage = $lenguage;
    }
    public function printFlags(){
        echo 'flag';
    }
}
