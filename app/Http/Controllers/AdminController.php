<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addNews()
    {
        return view('admin/news/AddNews');
    }
}
