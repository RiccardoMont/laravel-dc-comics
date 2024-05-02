<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comics</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>
<body>
    
<header>
<h1>Header layout app Comic</h1>

</header>


<main>
    @yield('content')
</main>

<footer>

<h3>&copy; footer</h3>


</footer>


</body>