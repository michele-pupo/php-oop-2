<?php

trait HasMaterial {
    public $material;

    public function getMaterial() {
        return $this->material;
    }

    public function setMaterial($material) {
        $this->material = $material;
    }
}