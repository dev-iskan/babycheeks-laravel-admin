<?php

namespace App\Models;

use App\Traits\FullTextSearch;
use App\Traits\HasFinish;
use App\Traits\HasPrice;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Product extends Model implements HasMedia
{
    use Sluggable, HasMediaTrait, HasFinish, FullTextSearch, HasPrice;
    /**
     * The columns of the full text index
     */
    protected $searchable = [
        'name',
        'description'
    ];

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
        'gender',
        'price'
    ];

    public function getFormattedGenderAttribute () {
        $genders = [
            'm' => 'Мальчики',
            'f' => 'Девочки',
            'u' => 'Унисекс',
        ];

        return $genders[$this->gender];
    }

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
