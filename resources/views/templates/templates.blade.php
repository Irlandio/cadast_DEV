<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}"
    </head>
    <bode>
       @yield('content') 
        
    </bode>
</html>