<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/logo.png" type="image/x-icon" />
    @vite('resources/css/app.css')
    <title>Pasar global</title>
</head>
<body class="bg-gray-50">
@include('user.component.navdesc')    
@yield('content')
</body>
</html>