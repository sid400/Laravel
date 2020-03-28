@extends('layouts.main')

@section('title')
Тест
@endsection


@section('content')

<section class="page_hello">
    <H1>Test</H1>
    @foreach ($rows as $key => $value)
    {{$value->content}}
    @endforeach
</section>

@endsection