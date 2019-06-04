<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Review;

class Product extends Model
{
    public function reviews()
    {
        return $this->hasMany(App\Review::class);
    }
}
