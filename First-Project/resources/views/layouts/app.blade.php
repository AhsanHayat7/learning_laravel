<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Theme Made By www.w3schools.com -->
    <title>Bootstrap Theme Company Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('layouts.styles')

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    @include('layouts.header')

    @yield('main-container')

    @include('layouts.footer')

    @include('layouts.scripts')
</body>
</html>
