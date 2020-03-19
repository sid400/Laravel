<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminNewsController extends Controller
{
    function addNews()
    {
        return view('admin.news.addNews', ['categories' => news::getCategories()]);
    }
}
