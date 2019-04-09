<?php

namespace App\Traits;

trait HasChildren
{
    public function scopeType($builder, $type)
    {
        // ->parents()->get()   -- get only parent models
        if ($type==='parent') {
            return $builder->whereNull('parent_id');
        }
        if ($type=='children') {
            return $builder->whereNotNull('parent_id');
        }
    }
}
