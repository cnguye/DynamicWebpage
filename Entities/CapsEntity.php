<?php

class CapsEntity{
    public $id;
    public $name;
    public $position;
    public $number;
    public $description;
    public $image;
    
    function __construct($id, $name, $position, $number, $description, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->position = $position;
        $this->number = $number;
        $this->description = $description;
        $this->image = $image;
    }

}

?>