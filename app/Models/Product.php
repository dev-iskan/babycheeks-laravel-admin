<?php

namespace App\Models;

use App\Traits\HasFinish;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Product extends Model implements HasMedia
{
    use Sluggable, HasMediaTrait, Searchable, HasFinish;

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

    public function orders() {
        return $this->hasMany(Product::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public static function createAndReturnSkeletonProduct () {
        return Product::create([
            'name' => 'undefined'
        ]);
    }

    public function storeFinishedProduct ($data) {
        $this->fill($data);
        $this->finished = true;
        $this->save();
    }

    public function setBrand($id) {
        if($id == 0) {
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
                'text' => "Gender",
                "value" => "gender"
            ],
            [
                'text' => "Brand",
                "value" => "brand"
            ],
            [
                'text' => "Created At",
                "value" => "created_at"
            ]
        ];
    }
}
