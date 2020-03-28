<?php

namespace App\Http\Controllers\Comments;

use App\Models\comments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class commentsController extends Controller
{
    function index(){
      $comments =  comments::all();
    }

    function delete($id_news, $id_comment){
        $comment = comments::destroy($id_comment);
        return redirect()->route('news::id',$id_news);
    }
//    function create(Request $request){
//        if ($request->isMethod('post')){
//            $model = new newsCatalog();
//            $model->fill($request->all());
//            $model->save();
//            return redirect()->route('admin::news::create');
//        }
//        $categories = Categories::all();
//
//        return view('admin.news.create',compact('categories'));
//    }
//    function update(Request $request, $id){
//        if ($request->isMethod('post')){
//            $model =  newsCatalog::find($id);
//            $model->fill($request->all());
//            $model->save();
//            return redirect()->route('admin::news::news');
//        }
//        $categories = Categories::all();
//        $model =  newsCatalog::find($id);
//        return view('admin.news.update',compact('categories','model','id'));
//    }
}
