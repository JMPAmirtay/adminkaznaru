<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondSlide extends Model
{
    use HasFactory;

    public function slide()
    {
        return $this->belongsTo(Slide::class, 'slide_id', 'id');
    }
}
