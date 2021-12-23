<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bluenova</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/BlueNova3.jpg') }}">

        <!-- CSS here -->
        <link rel="stylesheet" href="{{asset('css/style2.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        
        <!-- <link rel="stylesheet" href="css/style.css"> -->
     <!--================réalisé par anwar mohamed elkahza =================-->

</head>
<body>
        @include('partials.menu')    
        @yield('content')
        @include('partials.footer') 
</body>
</html>