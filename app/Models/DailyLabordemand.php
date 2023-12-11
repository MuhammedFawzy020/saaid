<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyLabordemand extends Model
{
    use HasFactory;
    protected $table='dailylabordemand';
    protected $guarded=[];
    public function job(){
        return $this->belongsTo(Job::class,'job_id');
    }

}
