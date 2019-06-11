@extends('layout.template')

@section('content')

  {{-- @php
    dd($myCategories);
  @endphp --}}
<h1>Edit Post {{$post -> id}}</h1>
<form action="{{ route('store.post', $post -> id)}}" method="post">
  @csrf
  @method('PUT')
  <label for="title">Titolo</label><br>
  <input type="text" name="title" value="{{$post -> title}}"><br>
  <label for="content">Contenuto</label><br>
  <input type="text" name="content" value="{{$post -> content}}"><br>
  @foreach($categories as $category)
    <input type="checkbox" name="categories[]" value="{{$category -> id}}"
    @foreach ($myCategories as $myCategory)
      @if ($category -> type == $myCategory -> type)
        checked
      @endif
    @endforeach
    >{{ $category -> type}}<br>
  @endforeach
  <select name="author_id">
    @foreach ($authors as $author)
      <option value="{{$author -> id }}">{{ $author -> username}}</option>
    @endforeach
  </select>
  <button type="submit">SALVA</button>
</form>
@stop
