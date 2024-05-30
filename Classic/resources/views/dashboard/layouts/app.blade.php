<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>
    @include('dashboard.layouts.styles')
</head>
<body>
    @include('dashboard.layouts.navigation')
    @include('dashboard.layouts.header')
    @include('dashboard.layouts.sidebar')

    @yield("main-container")

    

    @include('dashboard.layouts.scripts')

</body>
</html>

