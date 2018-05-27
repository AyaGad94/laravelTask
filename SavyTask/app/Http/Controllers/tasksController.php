<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class tasksController extends Controller
{
    
    public function show()
    {


        $tasks = Task::all();
        return view('tasks.show',[
        'tasks' => $tasks
        ]);
        

       
         
       
}


}
