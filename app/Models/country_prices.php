<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country_prices extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id' ,'price'
    ];


    public function country(){
        return $this->hasOne(Nationalitie::class , 'id', 'city_id');
    }
}
