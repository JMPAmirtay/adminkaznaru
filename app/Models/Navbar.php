<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function dropdowns()
    {
        return $this->hasMany(NavbarDropdown::class,'navbar_id','id');
    }
}
