<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code', 'name', 'description', 'size', 'slug', 'price', 'discount',
        'discount_percentage', 'quantity', 'delivery_fee'
    ];

    /* Relacionamento N:1 -> MUITOS produtos podem pertencer a UMA store => belongsTo */
    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    /* Relacionamento N:N -> MUITOS products podem possuir/pertencer a MUITAS categories */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
