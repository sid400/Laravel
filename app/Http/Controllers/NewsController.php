<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {   
        return view('News');
    }
    public function newsCard($id)
    {
        return view('NewsCard',compact('id'));
    }
}
