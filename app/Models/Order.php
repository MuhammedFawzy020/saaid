<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Order extends Model
{
    use HasFactory , SoftDeletes ;
    protected $guarded = [];


    public function biography()
    {
        return $this->belongsTo(Biography::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

}//end class
