<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class RecruitmentTrip extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table='recruitment_trip';
    protected $guarded=[];
    public $translatable = ['recruitment_contract_title','recruitment_contract_desc','recruitment_trip_title','recruitment_trip_desc','employment_arrival_title','employment_arrival_desc','customers_service_title','customers_service_desc'];


}
