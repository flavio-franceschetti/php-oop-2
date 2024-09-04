<?php

class Accessory extends Product{
    private $category;

    public function __construct($name, $price, $image, $type, $animalType, $description, $category = null) {

        parent::__construct($name, $price, $image, $type, $animalType, $description);

        $this->category = $category;
    }

     // all getter
     public function getCategory(){
        return $this->category;
    }

    // all setter
    public function setCategory($category){
        //si effettuano i controlli e una volta passati
        $this->category = $category;
    }
}