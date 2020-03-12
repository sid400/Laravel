<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {   
        echo view('header');
        echo view('linker');
        echo view('welcome');
        echo view('footer');
    }
}
