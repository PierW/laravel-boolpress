@extends('layout.template')

@section('content')
<a href="{{route('create.new.post')}}">CREA NUOVO POST</a>
<table>
  <thead>
    <td>Titolo</td>
    <td>Categorie</td>
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
        <td>{{ $post -> updated_at}}</td>
        <td><a href="{{route('edit.post', $post -> id)}}"><i class="fas fa-edit"></i> </a></td>
      </tr>
    @endforeach
  </tbody>
</table>
@stop
