@extends('layouts.main')

@section('title')
Новости
@endsection

@section('content')

<section class="page_news">
    <h1>News</h1>
    <a href="{{ route('admin::news::create') }}" class="btn btn-success m-1">Создать</a>
    @foreach($news as $key => $article )
    <div class="NewsCard">
        <span class="NewsCategoryNum">{{$key + 1}}.</span>
        <span class="NewsCategory">{{$article->title}}</span>
        <div>
            <a href="{{ route('admin::news::delete',$article->id) }}" class="btn btn-danger m-1">Удалить</a>
            <a href="{{ route('admin::news::update', $article->id) }}" class="btn btn-secondary m-3">Редактировать</a>
        </div>
    </div>
    @endforeach
    {{$news->links()}}
</section>
@endsection
