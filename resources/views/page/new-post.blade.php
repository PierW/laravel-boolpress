@extends('layout.template')

@section('content')
<h1>New Post</h1>
<form action="{{ route('save.new.post')}}" method="post">
  @csrf
  @method('POST')
  <label for="title">Titolo</label><br>
  <input type="text" name="title" value=""><br>
  <label for="content">Contenuto</label><br>
  <input type="text" name="content" value=""><br>
  @foreach($categories as $category)
    <input type="checkbox" name="categories[]" value="{{$category -> id}}">{{ $category -> type}}<br>
  @endforeach
  <button type="submit">SALVA</button>
</form>
@stop
