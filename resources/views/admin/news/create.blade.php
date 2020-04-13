@extends('layouts.main')

@section('title')
    Админка
@endsection
@if($done)
    <div class="container">
        <div class="alert alert-success fade show">
            {{$done}}
        </div>
    </div>
@endif

@section('content')
    <section class="page_admin_addnews">
        <H1>Add News</H1>
        <form action="{{route('admin::news::create')}}" method="post">
            @csrf
            <div class="form-group">
                @if ($errors->get('title'))
                    <div class="alert alert-danger">
                        @foreach ($errors->get('title') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                <label for="news_title">Заголовок</label>
                <input name="title" type="text" class="form-control" id="title"
                       value="{{$model->title ?? old('title')}}">
            </div>
            <div class="form-group">
                @if ($errors->get('content'))
                    <div class="alert alert-danger">
                        @foreach ($errors->get('content') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                <label for="news_data">Содержание</label>
                <textarea name="content" type="text" class="form-control" id="news-content"
                          rows="5">{{$model->content ?? old('content')}}</textarea>
            </div>
            <div class="form-group">
                @if ($errors->get('IsActive'))
                    <div class="alert alert-danger">
                        @foreach ($errors->get('IsActive') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                <span>Сделать активной</span>
                <input type="checkbox" id="IsActive" name="IsActive" value="1">
            </div>
            <div class="form-group">
                @if ($errors->get('id_category'))
                    <div class="alert alert-danger">
                        @foreach ($errors->get('id_category') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                <label for="news_categories">Example select</label>
                <select class="form-control" name="id_category" id="id_category">
                    @foreach( $categories as $key => $value)
                        <option value="{{$value->id}}"
                                @if($value->id == old('id_category'))
                                selected
                            @endif
                        >{{$value->Name}}</option>
                    @endforeach

                </select>
            </div>
            <button type="submit" class="btn btn-success">Создать</button>
        </form>
    </section>
    {{--    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>--}}
    {{--    <script>--}}
    {{--        var options = {--}}
    {{--            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',--}}
    {{--            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',--}}
    {{--            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',--}}
    {{--            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='--}}
    {{--        };--}}
    {{--        --}}
    {{--        CKEDITOR.replace('#news-content',options);--}}
    {{--    </script>--}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/ckeditor.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/adapters/jquery.js"></script>
    <script>
        $('#news-content').ckeditor({
            height: 100,
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
        });
    </script>
@endsection
