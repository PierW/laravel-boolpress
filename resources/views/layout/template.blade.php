<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Boolpress</title>
    <!-- Mio Js -->
    <script src="{{ mix('js/app.js') }}" charset="utf-8"></script>
    <!-- Mio Css -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
  <body>
    <header>
      <a href="{{route('home')}}">
        <h1>HOME</h1>
      </a>
    </header>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success">
      <ul>
        <li>{!! session('success') !!}</li>
      </ul>
    </div>
    @endif


    @yield('content')

    <footer>
      <h1>FOOTER</h1>
    </footer>
  </body>

</html>
