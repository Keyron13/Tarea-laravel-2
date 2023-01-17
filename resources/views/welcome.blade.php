<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="text-center p-5">
        <h1 class="text-info">
            <strong>BIENVENIDOS A MI TAREA</strong> 
        </h1>
        <h3 class="opacity-50">
            <em>
                Encontraras dos botones en donde puedes ingresar a las  secciones para poder interactuar con ellas...
            </em>
        </h3>
        <figcaption class="blockquote-footer pt-3">
            Elaborado por <cite title="Source Title">Keyron Aguilar</cite>
        </figcaption>
        <div class="pb-4">
            <img class="rounded-circle" style="width:10%" src="https://avatars.githubusercontent.com/u/117936163?s=400&u=a3e977fa7200625a2e4169163964c4a265c33d58&v=4" alt="">
        </div>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="button"> <a href="{{url('/provincias')}}" style="text-decoration: none; color:azure">PROVINCIA</a></button>
        <button class="btn btn-primary" type="button"> <a href="{{url('/frutas')}}" style="text-decoration: none; color:azure">FRUTA</a></button>
    </div>
</body>
</html>