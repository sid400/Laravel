<?php

namespace App\Http\Controllers\admin;

use App\Models\Categories;
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

    function addNews(Request $request)
    {      
        if ($request->isMethod('post')) {
            $title = $request->post('title');
            $data = $request->post('data');
            return view('admin.news.confirmationNews',compact('title','data'));
        }
        $content=   view('admin.news.addNews',['categories'=> (new Categories())->getCategories()]);
        return response($content)
        ->header("Test_headers",'This is response text');
    }
}
