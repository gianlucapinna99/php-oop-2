<?php

class Toy extends Product
{
    use PetDiscountTrait;

    public $dimension;
    public $features;
    
    public function setInfo(string $features, string $dimension)
    {
        $this->features = $features;
        $this->dimension = $dimension;
    }

    public function __construct(string $name, float $price, string $category, string $features, string $dimension)
    {
        parent::__construct($name, $price, $category);
        $this->setInfo($features, $dimension);
    }
    public function price(): float {
        return $this->discountedPrice();
    }
}