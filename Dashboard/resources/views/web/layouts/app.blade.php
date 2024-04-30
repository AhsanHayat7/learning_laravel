<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Boutique | Ecommerce bootstrap template')</title>

    @include('web.layouts.styles')

  </head>

<body>

    {{-- @include('web.layouts.navigation') --}}

    @include('web.layouts.header')

    @yield("main-container")

    @include('web.layouts.footer')

    @include('web.layouts.scripts')

    @yield('scripts')

</body>
</html>
