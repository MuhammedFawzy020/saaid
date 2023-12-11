<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \App\Models\AgeRange;
class Biography extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function scopeFilterByAge($query,$id)
    {
        if ($id != null) {
            $age = AgeRange::findOrFail($id);
            if(!empty($age)) {
                $query->whereBetween('age', [$age->from, $age->to]);
            }
        }
    }

    public function scopeFilterByReligion($query,$id)
    {
        if($id != null) {
            $query->where('religion_id ', $id);
        }
        
    }

    public function scopeType($query,$type)
    {
        $query->where('order_type', $type);
    }

    public function scopeStatus($query,$status)
    {
        $query->where('status', $status);
    }

    public function scopeFilterByJob($query,$id)
    {
        if ($id != null) {
            $query->where('job_id',$id);
        }
    }

    public function scopeFilterByNationality($query,$id)
    {
        if ($id != null && $id != 'undefined') {
            $query->where('nationalitie_id',$id);
        }
    }


    public function recruitment_office()
    {
        return $this->belongsTo(RecruitmentOffice::class);
    }


    public function nationalitie()
    {
        return $this->belongsTo(Nationalitie::class);
    }


    public function language_title()
    {
        return $this->belongsTo(LanguageTitle::class);
    }


    public function religion()
    {
        return $this->belongsTo(Religion::class);
    }

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function social_type()
    {
        return $this->belongsTo(SocialType::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }


    public function images()
    {
        return $this->hasMany(BiographyImage::class);
    }


    public function skills()
    {
        return $this->belongsToMany(Skill::class,BiographySkill::class,'biography_id','skill_id');
    }


    public function experinces(){
        return $this->hasOne(biograpies_exp::class , 'biography_id');
    }


    public function passport_city_name(){
       return $this->belongsTo(City::class , 'passport_city');
    }

   

    // public function city(){
    //     return $this->hasOne(City::class ,'')
    // }




}//end class
