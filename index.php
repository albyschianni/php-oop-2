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

    public function getHtml(){
        return "<h1>" . "Nome: " . $this->name . "<br>" .
            "Prezzo" . $this->price . "<br>" .
            "Marca" . $this->brand . "</h1>";
    }
}
class Category extends Product{

    public $animal;
    
    public function __construct($name,$price,$brand,$animal){

        $this -> animal = $animal;

        parent::__construct($name,$price,$brand);
    }

    public function getHtml() {

        return parent::getHtml() .
            $this -> getVarCategory();
    }

    public function getVarCategory(){
        return "<h1>" . "Categoria: " . $this-> animal . "</h1>";
    }
}
class Tipology extends Product{

    public $food;
    public $toys;
    public $kennels;

    public function __construct($name,$price,$brand,$food,$toys,$kennels){

        $this -> food = $food;
        $this -> toys = $toys;
        $this -> kennels = $kennels;

        parent::__construct($name,$price,$brand);
    }

    public function getHtml() {

        return parent::getHtml() .
            $this -> getVarTipology();
    }

    public function getVarTipology(){
        return "<h1>" . "Tipologia: " . $this -> food . $this -> toys . $this -> kennels . "</h1>";
    }
    
}

$carne = new Product("Carne", "10$",  "baubau", new Category("cane"), new Tipology("Food","",""));

echo $carne -> getHtml();

