<?php

namespace App\Http\Controllers\admin;

use App\Models\Categories;
use App\Models\newsCatalog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminNewsController extends Controller
{
    function index()
    {
        $news = newsCatalog::query()
            ->paginate(5);
//     dd($news);
        return view('admin.news.news', compact('news'));
    }

    function delete($id)
    {
        $news = newsCatalog::destroy($id);
        return redirect()->route('admin::news::news');
    }

    function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, newsCatalog::rules);
            $model = new newsCatalog();
            $model->fill($request->all());
            $model->save();
            return redirect()->route('admin::news::create');
        }
        $categories = Categories::all();
        return view('admin.news.create', compact('categories'));
    }

    function update(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, newsCatalog::rules);
            $model = newsCatalog::find($id);
            $model->fill($request->all());
            $model->save();
            return redirect()->route('admin::news::news');
        }
        $categories = Categories::all();
        $model = newsCatalog::find($id);
        return view('admin.news.update', compact('categories', 'model', 'id'));
    }
}
