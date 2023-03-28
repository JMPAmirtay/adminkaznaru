<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NavbarDropdown extends Model
{
    use HasFactory;

    public function navbar(){
        return $this->belongsTo(Navbar::class,'navbar_id','id');
    }
}
