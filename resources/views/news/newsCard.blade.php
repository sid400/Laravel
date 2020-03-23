@extends('layouts.main')

@section('title')
Новость {{$news[0]->id }} 
@endsection


@section('content')
<section class="">
<h3>{{$news[0]->Name }} </h3>
    <H1>{{$news[0]->title }}</H1>
    <p>{{$news[0]->content }} </p>
    <p>{{$news[0]->IsActive }} </p>
    <p>{{$news[0]->created_at }} </p>
</section>

@endsection