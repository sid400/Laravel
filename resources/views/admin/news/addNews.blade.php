@extends('layouts.main')

@section('title')
Админка
@endsection


@section('content')
<section class="page_admin_addnews">
    <H1>Add News</H1>
    <form action="{{route('admin::add')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="news_title">Заголовок</label>
            <input name="title" type="text" class="form-control" id="news_title">
        </div>
        <div class="form-group">
            <label for="news_data">Содержание</label>
            <textarea name="data" type="text" class="form-control" id="news_data" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="news_categories">Example select</label>
            <select class="form-control" name="categories" id="news_categories">
                @foreach( $categories as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
                @endforeach

            </select>
        </div>
        <!-- <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
        </div> -->
        <!-- <div class="alert alert-warning" role="alert">
        </div> -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>

@endsection
