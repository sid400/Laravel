<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        echo view('header');
        echo view('linker');
        echo view('Hello');
        echo view('footer');
    }
}
