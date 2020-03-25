<?php

namespace App\Http\Controllers\news;

use App\Models\Categories;
use App\Models\NewsCatalog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {

        $categories = Categories::query()
            /*Не нашел как передаь вложенный запрос, конструктором  Laravel, поэтому использовал сырой запрос*/
            ->selectRaw('categories.id, categories.Name, categories.IsActive, (select count(*) from newsCatalog where newsCatalog.id_category = categories.id) as count')
            ->where('IsActive' , '=', 1)
            ->get();
        return view('news\News', compact('categories', 'Count'));
    }

    public function newsCategories($id)
    {
        $news = newsCatalog::query()
            ->where('id_category', $id)
            ->get();
        return view('news\newsCategories', compact('news'));

    }

    public function newsCard($id)
    {
        $news = newsCatalog::find($id);
        return view('news\NewsCard', compact('news'));
    }
}
