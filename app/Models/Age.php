<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Age extends Model
{
    protected $fillable = [
        'age'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }

    public function getDisplayableColumns()
    {
        return [
            [
                'text' => "Id",
                "value" => "id"
            ],
            [
                'text' => "Age",
                "value" => "age"
            ],
            [
                'text' => "Created At",
                "value" => "created_at"
            ]
        ];
    }
}
