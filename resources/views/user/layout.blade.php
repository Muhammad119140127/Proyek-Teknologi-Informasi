<!doctype html>
<html lang="en">
  <head>
    
    @include('user.head')

    <title>@yield('title')</title>

  </head>
  <body>
    
    @include('user.nav')

    @yield('content')

    @include('user.scripts')

  </body>
</html>
