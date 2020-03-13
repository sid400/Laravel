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
        echo view('basic/header');
        echo view('basic/linker');
        echo view('NewsCard',compact('id'));
        echo view('basic/footer');
    }
}
