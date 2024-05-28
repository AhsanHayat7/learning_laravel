<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Todo-app')</title>
    @include('todos.layouts.styles')
</head>
<body>
    @include('todos.layouts.header')
    @yield('main-container')
    @include('todos.layouts.scripts')
</body>
</html>
