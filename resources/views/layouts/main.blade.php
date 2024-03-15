<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <title>App @yield('title')</title>
</head>
<body>


@include('includes.navbar')
{{-- <div class="navbar navbar-light bg-light d-flex justify-content-around">
   This is helps to change the navbar inside different pages 
  @section('navbar') 
    <a  class="navbar-brand" href="{{ route('posts.index')}}">
      Home
    </a>
    <a  class="navbar-brand" href="{{ route('posts.create')}}">
      Create
    </a>
    <a  class="navbar-brand" href="{{ route('posts.trash')}}">
      Trash
    </a>
    @show
</div> --}}
<div class="container">
  @yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
