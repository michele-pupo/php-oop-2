<?php

// definiamo la classe Product
class Product{
    // dichiariamo le variabili di istanza
    public $id;
    public $name;
    public $price;
    public $description;
    public $img;
    public $category;
    

    // funzione costruttore dei prodotti
    /**
     * __construct
     *
     * @param  int $_id
     * @param  string $name
     * @param  string $price
     * @param  string $description
     * @param  string $img
     * @param  array $category
     */
    function __construct($_id, $_name, $_price, $_description, $_img, Category $_category){
        $this->id = $_id;
        $this->name = $_name;
        if (is_numeric($_price)) {
            $this->price = ($_price);
        } else {
            throw new Exception("Inserisci un valore corretto");
        }
        $this->price = $_price;
        $this->description = $_description;
        $this->img = $_img;
        $this->category = $_category;
    }

    function getClassName(){
        return get_class();
    }
}