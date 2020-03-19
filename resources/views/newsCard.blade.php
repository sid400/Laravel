@extends('layouts.main')

@section('title')
Новость {{$id}}
@endsection


@section('content')
<section class="page_hello">
    <H1>NEWS #{{$id}}</H1>
</section>

@endsection