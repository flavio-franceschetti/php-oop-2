<?php

class Product {
    public $type;
    public $price;
    public $image;
    public $name;
    public $description;

    public function __construct(string $_type, float $_price, string $image, string $name, string $description){
        $this->type = $_type;
        $this->price = $_price;
        $this->image = $_image;
        $this->name = $_name;
        $this->description = $_description;
    }

    // //all getter
    // public function getType(){
    //     return $this->type;
    // }

    // public function getPrice(){
    //     return $this->price;
    // }

    // public function getImage(){
    //     return $this->image;
    // }

    // // all setter
    // public function setType($_type){
    //     //si effettuano i controlli e una volta passati
    //     $this->type = $_type;
    // }

    // public function setPrice($_price){
    //     //si effettuano i controlli e una volta passati
    //     $this->price = $_price;
    // }

    // public function setImage($_image){
    //     //si effettuano i controlli e una volta passati
    //     $this->image = $_image;
    // }
}
    

  