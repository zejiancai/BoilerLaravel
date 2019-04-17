<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'Boiler App') - 锅炉 管理后台</title>

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>

<body>
  <div id="app" class="{{ route_class() }}-page">

    @include('server_pages._header')

    <div class="container">

      @include('shared._messages')

      @yield('content')

    </div>

    @include('server_pages._server_footer')
  </div>

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}">
    //启用滚动条
   $(document.body).css({
     "overflow-x":"auto",
     "overflow-y":"auto"
   });
  </script>
</body>

</html>
