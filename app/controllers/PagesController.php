<?php

namespace App\Controllers;


class PagesController
{
    public function home(){
        view('index');
    }
    public function about(){
       view('about',[]);
    }
}