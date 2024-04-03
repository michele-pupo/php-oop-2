<?php

// inclusione della classe Food all'interno della classe Product
class Food extends Product{
    public $ingredients;
    public $weight;
    public $expiration;
    
    /**
     * __construct
     *
     * @param  int $_id
     * @param  string $_name
     * @param  string $_price
     * @param  string $_description
     * @param  string $_img
     * @param  object $_categories
     * @param  string $_ingredients
     * @param  int $_weight
     * @param  string $_expiration
     */
    public function __construct($_id, $_name, $_price, $_description, $_img, Category $_categories, $_ingredients, $_weight, $_expiration){
        
        // usa il costruttore del genitore
        parent::__construct($_id, $_name, $_price, $_description, $_img, $_categories);

        $this->ingredients = $_ingredients;
        $this->weight = $_weight;
        $this->expiration = $_expiration;
    }

    function getClassName(){
        return get_class();
    }
}