<?php

namespace App\Filters\Product\Filters;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Product;

class PriceFilter extends FilterAbstract {

    public function filter (Builder $builder, $priceValues) {
        $priceValues = $this->resolvePriceValues($priceValues);

        if (empty(array_filter($priceValues))) {
            return $builder;
        }
        return $builder->whereBetween('price', $priceValues);
    }

    protected function resolvePriceValues(array $priceValues) {
        $priceValues = $this->parseValues($priceValues);

        return array_merge($this->getDefaultPriceRange(), $priceValues);
    }

    protected function getDefaultPriceRange() {
        return [
            'min' => Product::minPrice(),
            'max' => Product::maxPrice()
        ];
    }

    protected function parseValues(array $priceValues) {
        return array_map(function ($entity) {
            $val = (int) $entity;
            return $val * 100;
        }, $priceValues);
    }
}
