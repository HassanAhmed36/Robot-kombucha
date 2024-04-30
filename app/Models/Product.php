<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'slug', 'description', 'price'
    ];
    public function images()
    {
        return $this->hasMany(Image::class, 'product_id');
    }

    protected static function booted()
    {
        parent::booted();

        static::creating(function ($product) {
            $product->slug = Str::slug($product->name);
        });
    }
}
