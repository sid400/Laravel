@extends('layouts.main')

@section('title')
Админка
@endsection


@section('content')
<section class="page_admin_addnews">
    <H1>Update News</H1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin::news::update',$id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input name="title" type="text" class="form-control" id="title" value="{{$model->title}}">
        </div>
        <div class="form-group">
            <label for="content">Содержание</label>
            <textarea name="content" type="text" class="form-control" id="content"
                      rows="5">{{$model->content}}</textarea>
        </div>
        <div class="form-group">
            <label for="IsActive">Сделать активной</label>
            <input type="checkbox" id="IsActive" name="IsActive" value="1"
                   @if($model->IsActive === 1)
            checked
            @endif>
        </div>
        <div class="form-group">
            <label for="news_categories">Example select</label>
            <select class="form-control" name="id_category" id="id_category" value="1">
                @foreach( $categories as $key => $value)
                <option value="{{$value->id}}"
                        @if($value->id === $model->id_category)
                    selected
                    @endif
                    >{{$value->Name}}
                </option>
                @endforeach

            </select>
        </div>
        <button type="submit" class="btn btn-success">Подтвердить</button>
    </form>
</section>

@endsection
