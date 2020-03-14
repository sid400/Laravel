<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends MainController
{
    public function index()
    {
        self::CollectTmpl('Auth');
    }
}
