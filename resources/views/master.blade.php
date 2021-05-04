<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') - page</title>
    <link href="/css/all.css" rel="stylesheet">
    {{-- <link href="http://yad2//css/all.css" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="background"></div>

<main class="py-4">
@yield('content')
</main>
</body>
</html>
