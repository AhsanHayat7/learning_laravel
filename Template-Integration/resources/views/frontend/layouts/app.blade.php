<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Append Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('frontend.layouts.style')
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->
  @include('frontend.layouts.header')
  <!-- End Header -->
  @yield('main-container')
  @include('frontend.layouts.footer')
    <!-- Scroll Top Button -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  
    @include('frontend.layouts.script')
  
  </body>
  
  </html>