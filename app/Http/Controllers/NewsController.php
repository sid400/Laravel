<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {   
        echo view('header');
        echo view('linker');
        echo view('news');
        echo view('footer');
    }
    public function newsCard($id)
    {
        return view('news');
    }
}
