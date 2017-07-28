<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    public static function showtask($id){
        $tasks = Tasks::all()->find($id);
        return $tasks;
    }
}
