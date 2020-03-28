@extends('layouts.main')

@section('title')
Админка
@endsection


@section('content')
<section class="page_hello">
    <H1>Админка</H1>
    <a href="{{route('admin::news::news')}}">News</a>
</section>

@endsection
