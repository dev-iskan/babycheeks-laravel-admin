<?php


namespace App\Filters\Product;

use App\Filters\FiltersAbstract;
use App\Filters\Product\Filters\AgeFilter;
use App\Filters\Product\Orders\PriceOrder;
use App\Filters\Product\Filters\BrandFilter;
use App\Filters\Product\Filters\PriceFilter;
use App\Filters\Product\Orders\CreatedOrder;
use App\Filters\Product\Filters\GenderFilter;

class ProductFilters extends FiltersAbstract
{
    protected $filters = [
        'genders' => GenderFilter::class,
        'brands' => BrandFilter::class,
        'ages' => AgeFilter::class,
        'price' => PriceFilter::class,
        // orders
        'created' => CreatedOrder::class,
        'priceOrder' => PriceOrder::class
    ];
}
