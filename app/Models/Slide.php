<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function second()
    {
        return $this->hasMany(SecondSlide::class,'slide_id','id');
    }
}
