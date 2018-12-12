<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('admin.layouts.head')
    @yield('head')
</head>
    <body>
        <div class="wrapper">
            @include('admin.layouts.sidebar')
            @yield('content')
        </div>
    </body>
</html>