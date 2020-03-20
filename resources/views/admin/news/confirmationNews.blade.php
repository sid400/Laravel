@extends('layouts.main')

@section('title')
Новости
@endsection


@section('content')
<h3>Новость добавлена</h3>
<h5>Заголовок</h5>
<div>{{$title}}</div>
<h5>содержание</h5>
<div>{{$data}}</div>


@endsection