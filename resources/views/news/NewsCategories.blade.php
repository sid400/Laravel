@extends('layouts.main')

@section('title')
Разделы
@endsection


@section('content')

<section class="page_news">
    <h1>News</h1>
    @foreach($news as $key => $article )
    <span>{{$key + 1}}</span>
    <a href="{{ route('news::id',$article->id) }}">{{ $article->title}}</a>
    @endforeach
</section>
@endsection
