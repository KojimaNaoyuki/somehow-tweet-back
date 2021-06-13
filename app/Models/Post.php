<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function Comments()
    {
        //リレーションの記述(1対N)
        return $this->hasMany('App\Models\Comment');
    }
}
