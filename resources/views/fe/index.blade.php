<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>@yield('title')</title>
    @include('fe.styles')
    @stack('styles')
  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  @include('fe.header')
  <!-- ***** Header Area End ***** -->

    @yield('content')

  @include('fe.footer')

  @include('fe.scripts')
  @stack('scripts')
  </body>
</html>