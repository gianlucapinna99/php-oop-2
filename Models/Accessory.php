<?php

class Accessory extends Product
{
    use PetDiscountTrait;
    public $material;
    public $dimension;

    public function __construct(string $name, float $price, string $category, string $material, string $dimension)
    {
        parent::__construct($name, $price, $category);
        $this->setInfo($material, $dimension);
    }

    public function setInfo(string $material, string $dimension)
    {
        $this->material = $material;
        $this->dimension = $dimension;
    }
    public function price(): float {
        return $this->discountedPrice();
    }
}