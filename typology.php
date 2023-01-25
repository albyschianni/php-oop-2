<?php 

class Tipology {

    public $food;
    public $toys;
    public $kennels;

    public function __construct($food,$toys,$kennels){

        $this -> food = $food;
        $this -> toys = $toys;
        $this -> kennels = $kennels;
    }
}