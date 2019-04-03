<?php

namespace App\Models;

use App\Traits\HasFinish;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFinish;

    protected $fillable = [
        'name',
        'phone'
    ];

    public function product () {
        return $this->belongsTo(Product::class);
    }

    public function setFinished (bool $val) {
        $this->finished = $val;
        $this->save();
    }
}
