<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icon-website.png') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  @vite('resources/css/app.css')
  <title>{{ $title }}</title>
  @yield('styles')
</head>

<body class="flex">
  @include('layouts.sidebar')

  <div class="flex-1">
    @yield('content')
  </div>
</body>

</html>