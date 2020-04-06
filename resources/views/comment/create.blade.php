@extends('layouts.main')

@section('title')
    Комментарий
@endsection


@section('content')
    <section class="page_comment">
        <H1>Добавить комментарий</H1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('comment::save')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="hidden" name="id_news" value="{{$id}}">
                <input type="hidden" name="id_user" value="10">
                <label for="content">Содержание</label>
                <textarea name="content" type="text" class="form-control" id="content"
                          rows="5">{{$model->content ?? old('content')}}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Создать</button>
        </form>
    </section>

@endsection
