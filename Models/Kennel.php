<?php

require_once __DIR__ . '/Traits/Sizeable.php';
require_once __DIR__ . '/Traits/HasMaterials.php';  
// inclusione della classe Kennel all'interno della classe Product
class Kennel extends Product{
    // uso il tratto dimensionabile
    use Sizeable;
    use HasMaterial;
    
    /**
     * __construct
     *
     * @param  int $_id
     * @param  string $_name
     * @param  string $_price
     * @param  string $_description
     * @param  string $_img
     * @param  object $_categories
     * @param  string $_size
     * @param  string $_material
     */
    public function __construct($_id, $_name, $_price, $_description, $_img, Category $_categories , $_size, $_material){
        
        // usa il costruttore del genitore
        parent::__construct($_id, $_name, $_price, $_description, $_img, $_categories);

        $this->size = $_size;
        $this->material = $_material;
    }

    function getClassName(){
        return get_class();
    }
}