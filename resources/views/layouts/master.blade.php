<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Template Main CSS File -->
    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">

    <!-- Template Main CSS File -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    {{--  Fontawesome--}}
    <link href="/css/font-awesome.min.css" rel="stylesheet">

    <script src="/js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <title>Saniei</title>
</head>
<body>
    <div id="body">
        @include('partial.header')
        @yield('content')
        @include('partial.footer')
    </div>

</body>


</html>
