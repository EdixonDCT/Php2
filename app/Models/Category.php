<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;


class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function productos()
    {
        return $this->hasMany('product');
    }
    public function images(): HasOneThrough
    {
        return $this->hasOneThrough(Image::class, Product::class);
    }
}