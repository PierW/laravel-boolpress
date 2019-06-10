@extends('layout.template')

@section('content')
<a href="{{route('create.new.post')}}">CREA NUOVO POST</a>
<form action="{{route('search')}}" method="get">
  <label for="title">Titolo</label>
  <input type="text" name="title" value="">
  <label for="content">Contenuto</label>
  <input type="text" name="content" value="">
  <label for="category">Categorie</label>
  <select name="category">
    <option value="">---</option>
    @foreach ($categories as $category)
      <option value="{{$category -> id }}"> {{ $category -> type}}</option>
    @endforeach
  </select>
  <label for="author">Autori</label>
  <select name="author">
    <option value="">---</option>
    @foreach ($authors as $author)
      <option value="{{$author -> id }}"> {{ $author -> username}}</option>
    @endforeach
  </select>
  <input type="submit" name="" value="SEARCH">
</form>
<table>
  <thead>
    <td>Titolo</td>
    <td>Categorie</td>
    <td>Autore</td>
    <td>Updated At</td>
    <td>Modifica</td>
  </thead>
  <tbody>
    @foreach($posts as $post)
      <tr>
        <td><a href="{{route('show.content', $post -> id)}}">{{ $post -> title }}</a></td>
        <td>
          {{ $post -> categories -> count()}}:<br>
          @foreach($post -> categories as $category)
            <a href="{{route('posts.by.category', $category -> type)}}">
              {{$category -> type}}
            </a><br>
          @endforeach
        </td>
        <td>{{$post -> author -> username}}</td>
        <td>{{ $post -> updated_at}}</td>
        <td><a href="{{route('edit.post', $post -> id)}}"><i class="fas fa-edit"></i> </a></td>
      </tr>
    @endforeach
  </tbody>
</table>
@stop
