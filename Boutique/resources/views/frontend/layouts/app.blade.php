<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boutique | Ecommerce bootstrap template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    @include('frontend.layouts.styles')

  </head>

<body>

    @include('frontend.layouts.header')

    @yield("main-container")

    @include('frontend.layouts.footer')

    @include('frontend.layouts.scripts')

</body>
</html>
