<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Age extends Model
{
    protected $fillable = [
        'age'
    ];

    public function products() {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }
}
