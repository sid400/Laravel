@extends('layouts.main')

@section('title')
Админка
@endsection


@section('content')
<section class="page_admin_addnews">
    <H1>Update News</H1>
    @if($DONE)
        <div class="container">
            <div class="alert alert-success fade show">
                {{$DONE}}
            </div>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin::profile::update') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Имя</label>
            <input name="name" type="text" class="form-control" id="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="title">email</label>
            <input name="email" type="email" class="form-control" id="email" value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label for="password">Текущий пароль</label>
            <input name="password" type="password" class="form-control" id="title" value="">
        </div>
        <div class="form-group">
            <label for="newPassword">Новый пароль</label>
            <input name="newPassword" type="password" class="form-control" id="title" value="">
        </div>
        <button type="submit" class="btn btn-success">Подтвердить</button>
    </form>
</section>

@endsection
