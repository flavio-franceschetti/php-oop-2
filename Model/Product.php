<?php
// quindi ho un prodotto e devo estenderlo con le varie categorie che possono essere esempio giochi, cibo, accessori ecc.. e creo nuove classi per questo invece per il tipo basterebbe anche sono cane o gatto in stringa nel type. Ma per il tipo cane o gatto posso creare anche un istanza all interno di prodotto che mi riporta a quello dei cani o gatti dove inserisco le caratteristiche del prodotto per gli animali come ad esempio la fascia di età, la lunghezza del pelo, il livello di attività ecc...
class Product {
   
    public $type;         
    public $price;
    public $image;
    public $name;
    public $description;
    public $animalType;

    public function __construct($_name, $_price, $_image, $_type, $_animalType, $_description){
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
        $this->type = $_type;
        $this->animalType = $_animalType;
        $this->description = $_description;
    }
   

    //all getter
    public function getType(){
        return $this->type;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getImage(){
        return $this->image;
    }

    public function getName(){
        return $this->name;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getAnimalType(){
        return $this->animalType;
    }

    // all setter
    public function setType($_type){
        //si effettuano i controlli e una volta passati
        $this->type = $_type;
    }

    public function setPrice($_price){
        //si effettuano i controlli e una volta passati
        $this->price = $_price;
    }

    public function setImage($_image){
        //si effettuano i controlli e una volta passati
        $this->image = $_image;
    }

    public function setName($_name){
        //si effettuano i controlli e una volta passati
        $this->image = $_image;
    }

    public function setDescription($_description){
        //si effettuano i controlli e una volta passati
        $this->image = $_image;
    }

    public function setAnimalType($_animalType){
        //si effettuano i controlli e una volta passati
        $this->image = $_image;
    }
}
    

  