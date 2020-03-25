@extends('layouts.main')

@section('title')
Новость {{$news[0]->id }}
@endsection


@section('content')
<section class="NewsCard">
    @if(($news[0]->IsActive)!== 1)
    <p class="alert alert-secondary">Статья в архивe</p>
    @endif
<h3>{{$news[0]->Name }} </h3>

    <H1>{{$news[0]->title }}</H1>
    <p class="text">{{$news[0]->content }} </p>
    <p class="text-black-50">Сатья создана:{{$news[0]->created_at }} </p>
</section>

@endsection
