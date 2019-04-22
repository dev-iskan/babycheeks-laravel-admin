<?php


namespace App\Filters\Product;

use App\Filters\FiltersAbstract;
use App\Filters\Product\Orders\SortOrder;
use App\Filters\Product\Filters\AgeFilter;
use App\Filters\Product\Filters\BrandFilter;
use App\Filters\Product\Filters\PriceFilter;
use App\Filters\Product\Filters\GenderFilter;
use App\Models\Brand;
use App\Models\Age;

class ProductFilters extends FiltersAbstract
{
    protected $filters = [
        'genders' => GenderFilter::class,
        'brands' => BrandFilter::class,
        'ages' => AgeFilter::class,
        'price' => PriceFilter::class,
        // orders
        'sort'=>SortOrder::class
    ];

    public static function mapping () {
      $map = [
          'genders' => ['u' => 'Унисекс', 'm' => 'Мальчики', 'f' => 'Девочки'],
          'brands' => Brand::pluck('name', 'slug'),
          'ages' => Age::pluck('age', 'id'),
      ];
      return $map;
    }

    public static function  sortings () {
      return [
        'created;asc' => 'Сначала старые',
        'created;desc' => 'Последние',
        'price;asc' => 'Сначала дешевле',
        'price;desc'  => 'Сначала дороже'
      ];
    }
}
