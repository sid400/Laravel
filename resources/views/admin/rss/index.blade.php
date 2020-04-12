@extends('layouts.main')

@section('title')
    News RSS
@endsection
@if($done)
    <div class="container">
        <div class="alert alert-success fade show">
            {{$done}}
        </div>
    </div>
@endif

@section('content')
    <section class="page_admin_parse">
        <H1>Add RSS</H1>
        <form action="{{route('admin::parser::load')}}" method="post">
            @csrf
            <div class="form-group">
                @if ($errors->get('title'))
                    <div class="alert alert-danger">
                        @foreach ($errors->get('title') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                <label for="RSS">RSS</label>
                <input placeholder="Вставьте RSS канал" name="RSS" type="text" class="form-control" id="title">
            </div>
            <button type="submit" class="btn btn-success" >Обработать</button>
        </form>
    </section>

@endsection
