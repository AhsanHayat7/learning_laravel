<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Classic - Responsive Bootstrap 4.0 Template')</title>

    @include('web.layouts.styles')

</head>

<body>
    @include('web.layouts.header')

    @yield("main-container")

    @include('web.layouts.footer')

    @include('web.layouts.scripts')

</body>
</html>
