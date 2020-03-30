<?php

namespace App\Http\Controllers\Comments;

use App\Models\Comments;
use Illuminate\Http\Request;
use App\Http\Requests\SaveCommentRequest;
use App\Http\Controllers\Controller;

class commentsController extends Controller
{
    function index()
    {
        $comments = Comments::all();
    }

    function delete($id_news, $id_comment)
    {
        $comment = Comments::destroy($id_comment);
        return redirect()->route('news::id', $id_news);
    }

    function create($id)
    {
        return view('comment.create', compact('id'));
    }

    function update($id_comment)
    {
        $comment = Comments::find($id_comment);

        return view('comment.update', compact('comment'));
    }

    function save(SaveCommentRequest $request)
    {
        $id = $request->all('id')['id'];
        $model = new Comments();
        if (!is_null($id)) {
            $model = Comments::find($id);
        }
        $model->fill($request->all());
        $model->save();
        $id_news = $request->all('id_news');
        $id_news = $id_news['id_news'];
        return redirect()->route('news::id', $id_news);
    }


}
