<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Task;

class TodoController
{
    public function index(){
        $tasks = App::get('database')->selectAll('todos',Task::class);
        return view('todos',['tasks'=>$tasks]);
    }
    public function store(){
        App::get('database')->insert("todos",['description'=>$_POST['todo']]);
       redirect('todos');
    }
}