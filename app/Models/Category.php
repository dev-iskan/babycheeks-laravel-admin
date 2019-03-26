<?php

namespace App\Models;

use App\Traits\HasChildren;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Category extends Model implements HasMedia
{
    use HasChildren, Sluggable, HasMediaTrait;

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
        'description'
    ];

    public function children () {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function parent () {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function products() {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }

    public function setParent($id) {

        if($id === null) {
            $this->parent()->dissociate()->save();
            return;
        }
        $this->parent()->associate($id)->save();
    }
}
