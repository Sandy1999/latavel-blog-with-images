<?php

namespace App;


class Posts extends Model
{
    public function comments(){
        return $this->hasMany(Comments::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function images(){
        return $this->hasMany(Images::class);
    }
    public function addComment($body){
        $this->comments()->create([
            'body'=>$body,
            'user_id'=>auth()->id()
            ]);
    }

    public static function archives(){
        return static::selectRaw('year(created_at) year,monthname(created_at) month, count(*) published')
        ->groupby('month','year')
        ->orderByRaw('min(created_at) desc')
        ->get()->toArray();
    }    
}
