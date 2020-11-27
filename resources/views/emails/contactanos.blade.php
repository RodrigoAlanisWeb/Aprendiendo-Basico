<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div{
            margin: 0px auto;
            margin-top: 20px;
            width: 95%;
            background: #f2f2f2;
            font-family: sans-serif;
            padding: 20px;
        }

        h1{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Nombre: {{ $contacto['name'] }}</h1>
        <p>Correo: {{ $contacto['email'] }}</p>
        <p>{{ $contacto['mensaje'] }}</p>
    </div>
    
</body>
</html>