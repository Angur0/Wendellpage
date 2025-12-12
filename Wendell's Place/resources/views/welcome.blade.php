<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Wendell's Place - Guitar Repair & Parts</title>
        
        <!-- Favicon -->
        <link rel="icon" href="/images/erasebg-transformed.ico" type="image/x-icon">
        
        <!-- Preload Background Images -->
        <link rel="preload" as="image" href="/images/Home.jpg" type="image/jpeg">
        <link rel="preload" as="image" href="/images/Products.jpg" type="image/jpeg">
        <link rel="preload" as="image" href="/images/About.jpg" type="image/jpeg">
        <link rel="preload" as="image" href="/images/Contact.jpg" type="image/jpeg">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/sekuya" rel="stylesheet">
        
        <!-- Styles and Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div id="app"></div>
    </body>
</html>
