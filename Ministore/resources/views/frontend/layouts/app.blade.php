<!DOCTYPE html>
<html>
  <head>
    <title>Ministore</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    @include('frontend.layouts.style')
</head> 

<body>
    @include('frontend.layouts.header')

    @yield('main-container')

    @include('frontend.layouts.footer')

    @include('frontend.layouts.scripts')

</body>
</html>