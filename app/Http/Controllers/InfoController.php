<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends MainController
{
    public function index()
    {
        self::CollectTmpl('Info');
    }
}