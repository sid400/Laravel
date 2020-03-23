@extends('layouts.main')

@section('title')
Новости
@endsection


@section('content')

<section class="page_news">
    <h1>News</h1>
    @foreach($categories as $key => $value )
    <div class="category">
    <span class="NewsCategoryNum">{{$key + 1}}.</span>
    <a class="NewsCategory" href="{{ route('news::category',$value->id) }}">{{ $value->Name}}</a>
    <div class="NewsCategoryCount">@if(isset($Count[$value->id])){{$Count[$value->id]}}@else {{0}}@endif </div>
    </div>
    @endforeach
</section>
@endsection
