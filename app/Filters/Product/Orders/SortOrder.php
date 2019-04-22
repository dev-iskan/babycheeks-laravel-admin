<?php

namespace App\Filters\Product\Orders;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class SortOrder extends FilterAbstract
{
    public function filter(Builder $builder, $values)
    {
      $values = $this->explodeFilterValues($values);

      if (empty(array_filter($values))) {
        return $builder;
      }

      if ($values[0] === 'created') {
        return $builder->orderBy('created_at', $this->resolveOrderDirection($values[1]));
      }
      else if ($values[0] === 'price') {
        return $builder->orderBy('price', $this->resolveOrderDirection($values[1]));
      } else {
        return $builder;
      }
    }

    protected function resolveOrderDirection ($direction) {
      return array_get([
        'desc' => 'desc',
        'asc' => 'asc'
      ], $direction, 'desc');
    }
}
