<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biograpies_exp extends Model
{
    use HasFactory;

    public function country(){
        return $this->belongsTo(City::class , 'exp_city_id');
    }


    public function job(){
        return $this->belongsTo(Job::class , 'exp_job_id');
    }
}
