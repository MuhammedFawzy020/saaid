<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country_prices extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id' ,'price', 'none_muslim', 'rent_muslim_price', 'rent_none_muslim_price'
    ];


    public function country(){
        return $this->hasOne(Nationalitie::class , 'id', 'country_id');
    }
}
