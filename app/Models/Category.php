<?php

namespace App\Models;

use App\Traits\HasChildren;
use App\Traits\HasFinish;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Category extends Model implements HasMedia
{
    use HasChildren, Sluggable, HasMediaTrait, HasFinish;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = [
        'name',
        'description',
        'primary'
    ];

    public function scopePrimary($builder)
    {
        return $builder->where('primary', true);
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function isParent()
    {
      return $this->children()->exists();
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }

    public static function createAndReturnSkeletonCategory()
    {
        return Category::create([
            'name' => 'undefined'
        ]);
    }

    public function storeFinishedCategory($data)
    {
        $this->fill($data);
        $this->finished = true;
        $this->save();
    }

    public function setParent($id)
    {
        if ($id == 0) {
            $this->parent()->dissociate()->save();
            return;
        }
        $this->parent()->associate($id)->save();
    }

    public function getDisplayableColumns()
    {
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
                'text' => "Parent",
                "value" => "parent"
            ],
            [
                'text' => "Created At",
                "value" => "created_at"
            ],
            [
              'text' => "Primary",
              "value" => "primary"
            ]
        ];
    }
}
