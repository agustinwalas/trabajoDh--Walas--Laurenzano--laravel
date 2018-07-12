<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Rapi Auto</title>
    <link rel="stylesheet" href="{{ asset('/css/estiloind.css') }}">
  </head>
  <body>

  @include('plantillas.header')

  @yield('contenido')

  @include('plantillas.footer')

  </body>
</html>
