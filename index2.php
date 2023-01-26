<?php

class Product {

    public $name;
    public $price;
    public $brand;
    public $category;
    public $tipology;

    public function __construct($name,$price,$brand, Category $category, Tipology $tipology) {

        $this -> name = $name;
        $this -> price = $price;
        $this -> brand = $brand;
        $this -> category = $category;
        $this -> tipology = $tipology;
    }

    public function getCategory(){
        
        $str = "";
        foreach ($this -> category as $category){
            
            $str .= $category->getCategory() . "<br>";
        }
        return $str;
    }

    public function getHtml(){
        return "<h1>" . "Nome: " . $this -> name . "<br>" .
            "Prezzo: " . $this -> price . "<br>" .
            "Marca: " . $this -> brand . "<br>" .
            "Categoria: " . $this -> getCategory() . "<br>" .
            // "Tipologia: " . $this -> tipology . 
            "</h1>";
        
    }
    
}
class Category{

    public $animal;
    
    public function __construct($animal){

        $this -> animal = $animal;

        
    }
}
class Tipology{

    public $food;
    public $toys;
    public $kennels;

    public function __construct($food,$toys,$kennels){

        $this -> food = $food;
        $this -> toys = $toys;
        $this -> kennels = $kennels;

        
    }
    
}

$carne = new Product("Carne", "10$",  "baubau", new Category("cane"), new Tipology("Food","",""));

echo $carne -> getHtml();

