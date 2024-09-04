<?php

class CatProduct extends Product{
    public $flavor;
    public $material;
    public $fur_length;
    public $activity_lvl;
    public $age_group;


    public function __construct(array $_type, float $_price, string $image, string $name, string $description = null, string $_flavor = null, string $_material = null, string $_fur_length = null , string $_activity_lvl = null, string $_age_group = null){

        parent::__construct($_type, $_price, $image, $name, $description);

        $this->flavor = $_flavor;
        $this->material = $_material;
        $this->fur_length = $_fur_length;
        $this->activity_lvl = $_activity_lvl;
        $this->age_group = $_age_group;

    }

}