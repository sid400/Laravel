@extends('layouts.main')

@section('title')
Новости
@endsection

@section('content')

<section class="page_news">
    <h1>News</h1>
    @foreach($categories as $key => $category )
    <div class="category">
        <span class="NewsCategoryNum">{{$key + 1}}.</span>
        <a class="NewsCategory" href="{{ route('news::category',$category->id) }}">{{ $category->Name}}</a>
        <div class="NewsCategoryCount">{{$category->count}}</div>
    </div>
    @endforeach
</section>
@endsection
