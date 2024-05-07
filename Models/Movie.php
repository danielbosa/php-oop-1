<?php
include_once __DIR__ . '/Product.php';

class MovieBasic {
    public string $title;
    public string $language;
    public float $vote; 

    public function __construct($title,$vote){
        $this->title = $title;
        $this->vote = $vote;
    }

    public function printVote(){
        $voteStar = ceil($this->vote / 2);
        $template = "";
        for($n = 1; $n <= 5; $n++){
            $template .= $n <= $voteStar ? "<i class='fa-solid fa-star'></i>" : "<i class='fa-regular fa-star'></i>";
        }
        echo $template;
    }

}

class Movie extends Product{
    
    public string $language;
    public function __construct($title,$language,$category,$price,$rating,$cover){
        $this->language = $language;
        //chiamo un metodo construct, ma definisco lo scope: il metodo va chiamato sul parent
        parent::__construct($title,$category,$price,$rating,$cover);
    }

    public function printVote(){
        $voteStar = ceil($this->rating / 2);
        $template = "";
        for($n = 1; $n <= 5; $n++){
            $template .= $n <= $voteStar ? "<i class='fa-solid fa-star'></i>" : "<i class='fa-regular fa-star'></i>";
        }
        echo $template;
    }

    public function printFlag(){

    }
 }