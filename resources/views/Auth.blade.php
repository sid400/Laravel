@extends('layouts.main')

@section('title')
Авторизация
@endsection


@section('content')
<section class="page_auth">
<h2>войти</h2>
<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">логин</label>
    <input name="login" type="text" class="form-control">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">пароль</label>
    <input  name="pass" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input  type="checkbox" class="form-check-input" id="exampleCheck1">
    <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
  </div>
  <div class="alert alert-warning" role="alert">

</div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</section>
@endsection

