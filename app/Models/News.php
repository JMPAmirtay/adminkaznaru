<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'post_tags','news_id','tag_id');
    }
}
