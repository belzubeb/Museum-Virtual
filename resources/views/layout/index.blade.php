<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Museum Bela Negara yang memperlihatkan sejarah dan seni dari masa perjuangan bangsa.">
  <title>Museum Bela Negara</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  @include('Partials.navbar')
  @yield('container')
  @include('Partials.footer')
</body>
</html>