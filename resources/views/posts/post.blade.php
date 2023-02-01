<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>MangResto</title>
</head>
<body>
    
@yield('navbar')
@yield('banner')
@yield('partner')
@yield('category')
@yield('about')
@yield('title2')
@yield('product')
@yield('cta')
@yield('footer')

</body>
</html>