<?php

trait PetDiscountTrait {
    public function applyPetDiscount($discountPercent) {
        if ($this->category !== 'cane' && $this->category !== 'gatto') {
            return; // se la categoria del prodotto non è 'cane' o 'gatto' non applichiamo lo sconto
        }

        if ($this->price <= 5) {
            throw new Exception("Il prezzo è inferiore o uguale a 5 euro, lo sconto non può essere applicato.");
        }

        $this->price = $this->price - ($this->price * ($discountPercent / 100));
    }
}