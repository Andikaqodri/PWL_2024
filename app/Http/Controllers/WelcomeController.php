<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class  WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }
}
