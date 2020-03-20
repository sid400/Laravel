<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminNewsController extends Controller
{
    protected $categories =[
        1 => 'Politic',
        2 => 'Economy',
        3 => 'IT',
        4 => 'Healthy',
    ];

    function addNews()
    {
        return view('admin.news.addNews',['categories'=> $this->categories]);
    }
}
