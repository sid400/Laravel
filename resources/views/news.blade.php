@extends('layouts.main')

@section('title')
Новости
@endsection


@section('content')

<section class="page_news">
    <h1>News</h1>
    <a href="{{ route('news::id',1) }}">News1</a>
    <a href="{{ route('news::id',2) }}">News2</a>
    <a href="{{ route('news::id',3) }}">News3</a>
    <a href="{{ route('news::id',4) }}">News4</a>
</section>
@endsection
