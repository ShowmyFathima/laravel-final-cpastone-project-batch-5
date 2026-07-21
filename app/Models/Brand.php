<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';
    protected $fillable = [
        'name',

        'description',

    ];
    // public function products()
    // {
    //     return $this->hasMnay(Product::class);
    // }
}
