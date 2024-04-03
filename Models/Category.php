<?php

//classe Category estende la classe Product implementando alcune proprietà
class Category {
    private $nameCategory;
    private $icon;

    // funzione costruttore delle categorie    
    /**
     * __construct
     *
     * @param  string $_nameCategory
     * @param  string $_icon
     */
    function __construct($_nameCategory, $_icon) {
        $this->nameCategory = $_nameCategory;
        $this->icon = $_icon;
    }
}