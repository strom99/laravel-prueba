<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Prueba</title>
    <!-- Estilos generales -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Estilos variables de acuerdo a las vistas -->
    @yield('css')
    <!-- Iconos fontAwesome -->
    <script src="https://kit.fontawesome.com/6f213ce53f.js" crossorigin="anonymous"></script>
</head>
<body>
    @php 
        $allowedRoutes = ['login', 'registro', 'forgot'];
    @endphp

    @includeWhen(!Route::is($allowedRoutes), 'component.header')

    @yield('content')
    @yield('js')

    @includeWhen(!Route::is($allowedRoutes), 'component.footer')
</body>
</html>