<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Myuser extends Model
{
    use HasFactory;

    public function Posts()
    {
        //リレーションの記述(1対N)
        return $this->hasMany('App\Models\Post');
    }
    public function Comments()
    {
        //リレーションの記述(1対N)
        return $this->hasMany('App\Models\Comment');
    }
}
