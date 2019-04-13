<?php

namespace App\Filters\Product\Filters;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class GenderFilter extends FilterAbstract {

    public function filter (Builder $builder, $values) {
        $values = $this->explodeFilterValues($values);

        if (empty(array_filter($values))) {
            return $builder;
        }

        return $builder->whereIn('gender', $values);
    }
}
