<?php

namespace App\Http\Controllers;

use App\Tasks;

//use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        $tasks = Tasks::all();
        return view('tasks',compact('tasks'));
    }

    public function show(Tasks $tasks){
         return view('tasks_view',compact('tasks'));
    }
}
