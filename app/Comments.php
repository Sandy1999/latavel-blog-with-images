<?php

namespace App;

class Comments extends Model
{
    public function comments(){
        return $this->belongsTo(Posts::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
