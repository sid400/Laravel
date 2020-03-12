<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends MainController
{
    public function index()
    {   
        self::CollectTmpl('News');
    }
    public function newsCard($id)
    {
        return view('news');
    }
}
