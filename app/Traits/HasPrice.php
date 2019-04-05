<?php

namespace App\Traits;

use App\Services\Money;

trait HasPrice {

    public function getFormattedPriceAttribute () {
        return $this->price->formatted();
    }

    public function getPriceAttribute ($value) {
        return new Money($value);
    }
}
