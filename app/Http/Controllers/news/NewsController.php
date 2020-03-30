<?php

namespace App\Http\Controllers\news;

use App\Models\Categories;
use App\Models\comments;
use App\Models\NewsCatalog;
use App\news;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\DocBlock\StandardTagFactory;

class NewsController extends Controller
{
    public function index()
    {

        $categories = Categories::query()
            /*Не нашел как передаь вложенный запрос, конструктором  Laravel, поэтому использовал сырой запрос*/
            ->selectRaw('categories.id, categories.Name, categories.IsActive, (select count(*) from newsCatalog where newsCatalog.id_category = categories.id) as count')
            ->where('IsActive', '=', 1)
            ->get();
        return view('news.News', compact('categories'));
    }

    public function newsCategories($id)
    {
        $news = NewsCatalog::query()
            ->where('id_category', $id)
            ->get();
        return view('news.newsCategories', compact('news'));

    }

    public function newsCard(NewsCatalog $news)
    {
        $id_news = $news->id;
//        $news = newsCatalog::find($id);
        $comments = comments::query()
            ->select()
            ->where('id_news', '=', $id_news)
            ->get();
        return view('news.NewsCard', ['news' => $news, 'comments' => $comments]);
    }
}
