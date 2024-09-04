<?php

class Food extends Product{
  
    private $flavor;
    private $ageGroup;

    public function _construct($name, $price, $image, $type, $animalType, $description, $flavor = null, $ageGroup = null){

        parent::_construct($name, $price, $image, $type, $animalType, $description);
        $this->flavor = $flavor;
        $this->ageGroup = $ageGroup;
    }
       
    // all getter
    public function getFlavor(){
        return $this->flavor;
    }
    
    public function getAgeGroup(){
        return $this->ageGroup;
    }
    // all setter
    public function setFlavor($flavor){
        //si effettuano i controlli e una volta passati
        $this->flavor = $flavor;
    }

    public function setAgeGroup($ageGroup){
        //si effettuano i controlli e una volta passati
        $this->ageGroup = $ageGroup;
    }
    

}