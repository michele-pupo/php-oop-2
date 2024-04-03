<?php

// inclusione della classe Game all'interno della classe Product
class Game extends Product{
    public $size;
    public $material;
    
    /**
     * __construct
     *
     * @param  int $_id
     * @param  string $_name
     * @param  string $_price
     * @param  string $_description
     * @param  string $_img
     * @param  array $_category
     * @param  string $_size
     * @param  string $_material
     */
    public function __construct($_id, $_name, $_price, $_description, $_img, Category $_category , $_size, $_material){
        
        // usa il costruttore del genitore
        parent::__construct($_id, $_name, $_price, $_description, $_img, $_category);

        $this->size = $_size;
        $this->material = $_material;
    }
}