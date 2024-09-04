<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return('Hello World');
    }

    public function greeting() {
        return view('blog.hello')
           ->with ('name','Qodri')
           ->with('occupation','Astronaut');
    }
}