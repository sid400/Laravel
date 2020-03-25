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

@endsection
