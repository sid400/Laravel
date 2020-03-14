<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    protected function CollectTmpl($tmpl)
    {
        echo view('basic/header');
        echo view('basic/linker');
        echo view($tmpl);
        echo view('basic/footer');
    }
}
