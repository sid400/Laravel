@extends('layouts.main')

@section('title')
Пиветствие
@endsection


@section('content')

<section class="page_hello">
    <H1>Привет</H1>
    <button class=" btn btn-primary" onclick="getTest()">ddddd</button>
    <div class="result" id="result"></div>
</section>

@endsection
