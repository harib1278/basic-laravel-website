<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Basic website</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">
      @if (Request::is('/'))
        @include('inc.showcase')
      @endif

      @include('inc.messages')

      <div class="row">
        <div class="col-md-8 col-lg-8">
          @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
          @include('inc.sidebar')
        </div>
      </div>
   </div>
   <footer id="footer" class="text-center">
     <p>Copyright (c) 2020 Copyright Holder All Rights Reserved.</p>
   </footer>
  </body>
</html>
