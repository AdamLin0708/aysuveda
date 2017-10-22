<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aysuvada</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    @include('web.partial._navbar')
    <div style="margin-top: 82px;">
        @yield('content')
    </div>
    @yield('footer')
    @yield('javascript')
</body>
</html>

