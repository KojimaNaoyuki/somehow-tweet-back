<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['user_name', 'text', 'good_num']; //許可

    public function Comments()
    {
        //リレーションの記述(1対N)
        return $this->hasMany('App\Models\Comment');
    }
}
