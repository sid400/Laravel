<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends MainController
{
    public function index()
    {
        self::CollectTmpl('test');
    }
}