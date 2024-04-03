<?php

// definiamo la classe Product
class Product{
    // dichiariamo le variabili di istanza
    public $id;
    public $name;
    public $price;
    public $description;
    public $img;
    public $discount;
    public $categories;
    

    // funzione costruttore dei prodotti
    /**
     * __construct
     *
     * @param  int $_id
     * @param  string $name
     * @param  string $price
     * @param  string $description
     * @param  string $img
     * @param  array $categories
     */
    function __construct($_id, $_name, $_price, $_description, $_img, Category $_categories){
        $this->id = $_id;
        $this->name = $_name;
        $this->price = $_price;
        $this->description = $_description;
        $this->img = $_img;
        $this->categories = $_categories;
    }

    function getClassName(){
        return get_class();
    }
}