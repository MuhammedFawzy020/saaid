<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Spatie\Translatable\HasTranslations;

class RecruitmentRequirement extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table='recruitment_requirements';
    protected $guarded=[];
    public $translatable = [
        'title','step_1','step_2',
        'step_3','step_4','step_5',
    ];
}
