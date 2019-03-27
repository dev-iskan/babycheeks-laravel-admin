<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Product extends Model implements HasMedia
{
    use Sluggable, HasMediaTrait, Searchable;

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
        'description',
        'gender'
    ];

    public function categories() {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function ages() {
        return $this->belongsToMany(Age::class)->withTimestamps();
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function setBrand($id) {
        if($id === null) {
            $this->brand()->dissociate()->save();
            return;
        }
        $this->brand()->associate($id)->save();
    }

    public function syncAges(array $ids) {
        $this->ages()->sync($ids);
    }

    public function syncCategories(array $ids) {
        $this->categories()->sync($ids);
    }

    public function searchableFields() {
        return ['name', 'description'];
    }

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
        ];
    }
}
