<?php

class Product {

    public $price;
    public $name;
    public $brand;
    
    public function __construct($price,$name,$brand,) {

        $this -> price = $price;
        $this -> name = $name;
        $this -> brand = $brand;
       
    }
}


