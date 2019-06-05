@extends('layout.template')

@section('content')
<h1 id="category" >{{$category -> type}}</h1>
<table>
  <thead>
    <td>Titolo</td>
    <td>Categorie</td>
    <td>Updated At</td>
  </thead>
  <tbody>
    @foreach($category -> posts as $post)
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
        <td>{{ $post -> updated_at}}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@stop
