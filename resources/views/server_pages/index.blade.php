<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>@yield('title', 'Boiler App') - 锅炉 管理后台</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
<body>
    <div id="app" class="{{ route_class() }}-page">

        @include('server_pages._header')


        @include('server_pages._footer')
    </div>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>