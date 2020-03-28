@extends('layouts.main')

@section('title')
Админка
@endsection


@section('content')
<section class="page_admin_addnews">
    <H1>Add News</H1>
    <form action="{{route('admin::news::create')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="news_title">Заголовок</label>
            <input name="title" type="text" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="news_data">Содержание</label>
            <textarea name="content" type="text" class="form-control" id="content" rows="5"></textarea>
        </div>
        <div class="form-group">
            <span>Сделать активной</span>
            <input type="checkbox" id="IsActive" name="IsActive"  value="1">
        </div>
        <div class="form-group">
            <label for="news_categories">Example select</label>
            <select class="form-control" name="id_category" id="id_category">
                @foreach( $categories as $key => $value)
                <option value="{{$value->id}}">{{$value->Name}}</option>
                @endforeach

            </select>
        </div>
        <button type="submit" class="btn btn-success">Создать</button>
    </form>
</section>

@endsection
