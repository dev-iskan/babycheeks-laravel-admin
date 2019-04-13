<?php

namespace App\Filters\Product\Orders;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class PriceOrder extends FilterAbstract
{
    public function mappings()
    {
        return [
            'asc' => 'asc',
            'desc' => 'desc'
        ];
    }

    public function filter(Builder $builder, $value)
    {
        $value = $this->resolveFilterValue($value);

        if($value === null) {
            return $builder;
        }

        return $builder->orderBy('price', $this->resolveOrderDirection($value));
    }
}
