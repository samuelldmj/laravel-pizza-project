<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza</title>
    <!-- styles -->
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
@yield('content')
<footer>CopyRight {{date("m-d-y", strtotime("Today"))}} Samuelldmj</footer>
</body>
</html>