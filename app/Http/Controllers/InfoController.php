<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        echo view('header');
        echo view('linker');
        echo view('Info');
        echo view('footer');
    }
}