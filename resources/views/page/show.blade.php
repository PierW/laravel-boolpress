@extends('layout.template')

@section('content')
  <h1>Dettagli Post ID: {{ $post -> id }}</h1>
  <table>
    <thead>
      <td>Titolo</td>
      <td>Contenuto</td>
      <td>Updated At</td>
    </thead>
    <tbody>
      <tr>
        <td>{{$post -> title}}</td>
        <td>{!!$post -> content!!}</td>
        <td>{{$post -> updated_at}}</td>
      </tr>
    </tbody>
  </table>
@stop()
