<?php

namespace App\Http\Controllers\admin;

use App\Models\Categories;
use App\Models\NewsCatalog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminNewsController extends Controller
{
    function index()
    {
        $news = NewsCatalog::query()
            ->paginate(5);
//     dd($news);
        return view('admin.news.news', compact('news'));
    }

    function delete($id)
    {
        $news = NewsCatalog::destroy($id);
        return redirect()->route('admin::news::news');
    }

    function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, NewsCatalog::rules,[],NewsCatalog::attributeNames());
            $model = new NewsCatalog();
            $model->fill($request->all());
            $model->save();
            return redirect()->route('admin::news::create')
                ->with('success', 'Отлично новость добавленна');
        }
        $categories = Categories::all();
        $done = session('success');
        return view('admin.news.create', compact('categories','done'));
    }

    function update(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, NewsCatalog::rules);
            $model = NewsCatalog::find($id);
            $model->fill($request->all());
            $model->save();
            return redirect()->route('admin::news::news');
        }
        $categories = Categories::all();
        $model = NewsCatalog::find($id);
        return view('admin.news.update', compact('categories', 'model', 'id'));
    }
}
