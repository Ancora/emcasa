<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name', 'register', 'company_name', 'description', 'prefix', 'slug', 'public_place', 'number',
        'complement', 'district', 'city', 'country', 'postal_code', 'phone', 'mobile_phone', 'email', 'delivery_fee'
    ];

    /* Relacionamento N:1 -> MUITAS stores podem pertencer a UM user => belongsTo */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /* Relacionamento 1:N -> UMA store pode possuir MUITOS products => hasMany */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
