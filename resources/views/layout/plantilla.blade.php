<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        .active{
            color: rgb(75, 74, 74);
        }
    </style>
</head>
<body>

        @include('layout.partials.header')

        <div class="pl-3">
            @yield('content')
        </div>
    
        @include('layout.partials.footer')
    
</body>
</html>