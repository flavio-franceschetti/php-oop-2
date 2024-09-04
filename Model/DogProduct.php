<?php

class DogProduct extends Product{
    public $dog_size;
    public $flavor;
    public $material;
    public $age_group;

    public function __construct(array $_type, float $_price, string $image, string $name, string $description = null, string $_dog_size, string $_flavor = null, string $_material = null, string $_age_group = null){

        parent::__construct($_type, $_price, $image, $name, $description);

        $this->dog_size = $_dog_size;
        $this->flavor = $_flavor;
        $this->material = $_material;
        $this->age_group = $_age_group;

    }

}