<?php

namespace App;

class Images extends Model
{
    public function posts(){
        return $this->belongsTo(Posts::class);
    }
}
