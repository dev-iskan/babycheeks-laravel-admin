<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getRouteKeyName () {
        return 'slug';
    }

    protected $fillable = [
        'name'
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function getDisplayableColumns() {
        return [
            [
                'text' => "Id",
                "value" => "id"
            ],
            [
                'text' => "Name",
                "value" => "name"
            ],
            [
                'text' => "Slug",
                "value" => "slug"
            ],
            [
                'text' => "Created At",
                "value" => "created_at"
            ]
        ];
    }
}
