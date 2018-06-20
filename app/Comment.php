<?php

namespace App;

class Comment extends Model
{
    //protected $fillable =['body'];



    public function post(){

        return $this->belongsTo(Post::class);

    }
}

