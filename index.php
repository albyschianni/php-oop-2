<?php

class Product {

    public $price;
    public $name ;
    public $brand;
    public $category;

    public function __construct($price,$name,$brand,$category) {

        $this -> price = $price;
        $this -> name = $name;
        $this -> brand = $brand;
        $this -> category = $category;
    }
}

class CatProduct extends Product{

}



class DogProduct extends Product{

}

$newCatProduct = new CatProduct("10$","pesce","miaomiao","alimento");

$newDogProduct = new DogProduct("12$", "carne", "baubau", "alimento");