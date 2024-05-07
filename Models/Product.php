<?php
class Product{
    public string $title;
    public float $price;
    public float $rating;
    public string $cover;

    public function __construct($title,$price,$rating,$cover){
        $this->title = $title;
        $this->price = $price;
        $this->rating = $rating;
        $this->cover = $cover;
    }

    public function getVote(){
        $vote =ceil ($this->rating / 2);
        $template ="<p>";
        for($i=1;$i<=5;$i++){
            $template .= $i <= $vote ? "<i class='fa-solid fa-star'></i>" : "<i class='fa-regular fa-star'></i>";
        }
        $template .="</p>";
        return $template;
    }
    public function getPrice(){
        return $this->price ."€";
    }

}