<?php

namespace App\Traits;

trait HasFinish {
    public function scopeFinished ($builder) {
        return $builder->where('finished', true);
    }

    public function scopeUnfinished($builder) {
        return $builder->where('finished', false);
    }
}
