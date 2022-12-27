<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Make;

class Car_model extends Model
{
    use HasFactory;

    public function car_make()
    {
        return $this->belongsTo(Make::class,'make');
    }
}
