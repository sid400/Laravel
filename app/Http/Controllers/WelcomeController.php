<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends MainController
{
    public function index()
    {   
        self::CollectTmpl('Welcome');
    }
}
