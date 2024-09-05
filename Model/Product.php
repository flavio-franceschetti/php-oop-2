<?php
// quindi ho un prodotto e devo estenderlo con le varie categorie che possono essere esempio giochi, cibo, accessori ecc.. e creo nuove classi per questo invece per il tipo basterebbe anche sono cane o gatto in stringa nel type. Ma per il tipo cane o gatto posso creare anche un istanza all interno di prodotto che mi riporta a quello dei cani o gatti dove inserisco le caratteristiche del prodotto per gli animali come ad esempio la fascia di età, la lunghezza del pelo, il livello di attività ecc...
class Product {
   
    protected $type;         
    protected $price;
    protected $image;
    protected $name;
    protected $description;
    protected $animalType;

    public function __construct($_name, $_price, $_image, $_type, $_animalType, $_description){
        $this->name = $_name;
        $this->setPrice($_price);
        $this->image = $_image;
        $this->setType($_type);
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
        // faccio un controllo che type sia una stringa
        if(!is_string($_type)){
            throw new Exception('Il type non è una stringa');
        }
        // creo un controllo per controllare che il tipo inserito sia fra quelli disponibili
        $allowedType = ["Toy", "Accessory", "Food", "toy", "accessory", "food"];

        if(!in_array($_type, $allowedType)){
            throw new Exception('Il type non rientra nella lista dei tipi');
        }

        $this->type = $_type;
    }

    public function setPrice($_price){
        //si effettuano i controlli e una volta passati
        // effettuo un controllo se il prezzo è un float
        if(!is_numeric($_price)){
            throw new Exception('Il prezzo non è un numero');
        }

        $this->price = $_price;
    }

    public function setImage($_image){
        //si effettuano i controlli e una volta passati
        $this->image = $_image;
    }

    public function setName($_name){
        //si effettuano i controlli e una volta passati
        $this->image = $_name;
    }

    public function setDescription($_description){
        //si effettuano i controlli e una volta passati
        $this->image = $_description;
    }

    public function setAnimalType($_animalType){
        //si effettuano i controlli e una volta passati
        $this->image = $_animalType;
    }
}
    

  