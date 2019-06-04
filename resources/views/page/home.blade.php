@extends('layout.template')

@section('content')
<a href="{{route('create.new.post')}}">CREA NUOVO POST</a>
<table>
  <thead>
    <td>Titolo</td>
    <td>Categorie</td>
    <td>Updated At</td>
  </thead>
  <tbody>
    @foreach($posts as $post)
      <tr>
        <td>{{ $post -> title }}</td>
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
