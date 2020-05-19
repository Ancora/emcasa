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

    /* Relacionamento N:1 -> MUITAS categories podem pertencer a UM user => belongsTo */
    /* public function user()
    {
        return $this->belongsTo(User::class);
    } */
}
