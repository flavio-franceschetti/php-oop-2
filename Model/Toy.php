<?php

class Toy extends Product{
    private $material;
    private $size;

    public function __construct($name, $price, $image, $type, $animalType, $description, $material = null, $size = null) {
        
        parent::__construct($name, $price, $image, $type, $animalType, $description);

        $this->material = $material;
        $this->size = $size;
    }
    // all getter
    public function getMaterial(){
        return $this->material;
    }

    public function getSize(){
        return $this->size;
    }

    // all setter
    public function setMaterial($material){
        //si effettuano i controlli e una volta passati
        $this->material = $material;
    }

    public function setSize($size){
        //si effettuano i controlli e una volta passati
        $this->size = $size;
    }
}