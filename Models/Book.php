<?php
include_once __DIR__ . '/Product.php';

class Book extends Product{
    
    public int $numPages;
    public string $author;
    public function __construct($title,$author,$numPages,$category,$price,$rating,$cover){
        $this->author = $author;
        $this->numPages = $numPages;
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