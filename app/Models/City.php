<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class City extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $guarded = [];
    public $translatable = ['title'];


    public function city_price(){
        return $this->hasOne('App\Models\country_price');
    }

}
