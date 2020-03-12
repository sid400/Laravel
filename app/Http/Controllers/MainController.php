<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    protected function CollectTmpl($tmpl)
    {
        echo view('header');
        echo view('linker');
        echo view($tmpl);
        echo view('footer');
    }
}
