<?php

namespace App\Traits;

trait HasChildren {

    public function scopeParents ($builder) {
        // ->parents()->get()   -- get only parent models
        $builder->whereNull('parent_id');
    }
}
