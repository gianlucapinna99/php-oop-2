<?php

class Food extends Product
{
    public $weight;
    public $ingredients;

    public function __construct(string $name, float $price, string $category, int $weight, array $ingredients)
    {
        parent::__construct($name, $price, $category);
        $this->setInfo($weight, $ingredients);
    }

    public function setInfo(int $weight, array $ingredients)
    {
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
}
