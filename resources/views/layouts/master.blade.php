<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      @yield('title', 'Default Title')
    </title>

    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    @yield('stylesheets')

  </head>
  <body>
    <nav>
      @include('partials.navbar')
    </nav>
    <header  style="margin-top: 50px; background: black; color: #fff">
      <h3>Site Title</h3>
    </header>

    <div class="wrapper">
      <div class="content">
        @yield('content')
      </div>
      <div class="sidebar">
        @include('partials.sidebar')
      </div>
      <div class="clear"></div>
    </div>


    <footer style="margin-top: 50px; background: black; color: #fff">
      All rights reserved
    </footer>
  </body>
</html>
