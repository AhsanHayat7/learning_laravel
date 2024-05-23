<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Todos')</title>

    @include('layouts.styles')
</head>
<body>
    @include('layouts.header')

    @yield('main-container')

    @include('layouts.scripts')
</body>
</html>
