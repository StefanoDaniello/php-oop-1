<?php
include __DIR__ ."/Category.php";
class Product{
    public string $title;
    public Category $category;
    public float $price;
    public float $rating;
    public string $cover;

    public function __construct($title,$category,$price,$rating,$cover){
        $this->title = $title;
        $this->category = $category;
        $this->price = $price;
        $this->rating = $rating;
        $this->cover = $cover;
    }

    public function showAll(){
        echo 'showAll';
    }

    public function showdetails(){
        echo 'showDetails';
    }

    public function searchData(){
        echo 'searchData';
    }

}