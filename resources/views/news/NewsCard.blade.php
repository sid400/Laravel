@extends('layouts.main')

@section('title')
Новость {{$news->id }}
@endsection


@section('content')
<section class="NewsCard">
    @if(($news->IsActive)!== 1)
    <p class="alert alert-secondary">Статья в архивe</p>
    @endif
<h3>{{$news->Name }} </h3>

    <H1>{{$news->title }}</H1>
    <p class="text">{{$news->content }} </p>
    <p class="text-black-50">Сатья создана:{{$news->created_at }} </p>
</section>
<section class="commets">
    <h3>Комментарии</h3>
    <a href="{{ route('comment::create',$news->id )}}" class="btn btn-danger m-1">Добавить</a>
    @foreach($comments as $key => $comment)
    <div class="NewsCard">
    <p class="text">{{$comment->content }} </p>
        <a href="{{ route('comment::delete',[$news->id ,$comment->id]) }}" class="btn btn-danger m-1">Удалить</a>
        <a href="{{ route('comment::update',[$comment->id]) }}" class="btn btn-secondary m-1">Редактировать</a>
    </div>
    @endforeach


</section>

@endsection
