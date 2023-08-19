<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">

    <title>@yield('title')</title>
</head>
<body>
@yield('content')

<script src="{{ asset('js/jquery.min.js.js') }}"></script>
<script src="{{ asset('js/adminlte.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.js.js') }}"></script>

@stack('js')
</body>
</html>
