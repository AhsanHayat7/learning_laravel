<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
    @yield('title', 'Dashboard - NiceAdmin Bootstrap Template')
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
    
    @include('frontend.layouts.style')
</head>
<body>
    @include('frontend.layouts.header')
    @include('frontend.layouts.sidebar')

    @yield('main-container')

    @include('frontend.layouts.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('frontend.layouts.scripts')

    @yield('scripts')

</body>
</html>
