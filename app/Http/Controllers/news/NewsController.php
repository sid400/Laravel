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
        $categories = (new Categories())->getActiveCategories();
        $Count = (new NewsCatalog())->getCountNewsByCategory();
        // dd($Count);
        return view('news\News',compact('categories','Count'));
    }
    public function newsCategories($id)
    {
        $news = (new NewsCatalog())->getNewsByIdCategory($id);

        return view('news\newsCategories',compact('news'));
    }
    public function newsCard($id)
    {
        $news = (new NewsCatalog())->getNewsById($id);
        // dd($news);
        return view('news\NewsCard',compact('news'));
    }
}
