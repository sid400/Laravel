<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends MainController
{
    public function index()
    {
        self::CollectTmpl('Hello');
    }
}
