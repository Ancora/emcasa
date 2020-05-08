<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description', 'slug'];

    /* Relacionamento N:N -> MUITAS categories podem possuir/pertencer a MUITOS products */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
