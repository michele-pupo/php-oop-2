<?php

class Product{
    private $id;
    private $name;
    private $price;
    private $description;
    private $img;
    private $discount;
    private $category;
    
    /**
     * __construct
     *
     * @param  mixed $_id
     * @param  mixed $name
     * @param  mixed $price
     * @param  mixed $description
     * @param  mixed $img
     * @param  mixed $category
     */
    function __construct($_id, $_name, $_price, $_description, $_img, $_category){
        $this->id = $_id;
        $this->name = $_name;
        $this->price = $_price;
        $this->description = $_description;
        $this->img = $_img;
        $this->category = $_category;
    }
}