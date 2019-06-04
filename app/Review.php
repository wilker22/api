<?php

namespace App;

use App\Model\Product;
use Illuminate\Database\Eloquent\Model;


class Review extends Model
{
    public function product()
    {
        return $this->belongsTo(App\Model\Product::class);
    }
}
