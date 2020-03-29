<?php

namespace App\Http\Controllers\Comments;

use App\Models\comments;
use Illuminate\Http\Request;
use App\Http\Requests\SaveCommentRequest;
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
    function create($id){
return view('comment.create', compact('id'));
        }

    function update(){

    }

    function save(SaveCommentRequest $request){
        $model = new comments();
        $model->fill($request->all());
        $model->save();
        return redirect()->route('news::id', '10');
    }


}
