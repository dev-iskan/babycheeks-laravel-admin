<?php

namespace App\Models;

use App\Traits\HasChildren;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasChildren, Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected $fillable = [
        'name',
    ];

    public function children () {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function products() {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }
}
