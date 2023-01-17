<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div>
        <figure class="text-center pt-5 pb-3 ">
            <blockquote class="blockquote">
              <p>BIENVENIDOS A LA FRUTERIA</p>
            </blockquote>
            <div>
                <img  style="width:13%" src="https://images.vexels.com/media/users/3/203823/isolated/preview/42ed065a030d336befe6d5aa93523f13-dibujado-a-mano-frutas-fresa-fruta.png" alt="">
            </div>
            <figcaption class="blockquote-footer">
              Elaborado por <cite title="Source Title">Keyron Aguilar</cite>
            </figcaption>
        </figure>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="button"> <a href="{{url('/frutas/crear')}}" style="text-decoration: none; color:azure">INGRESAR FRUTA</a></button>
        </div>
        <div class="p-5 text-center">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($frutas as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->cantidad}}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{url('/frutas/'.$item->id)}}" class="btn btn-info">Editar</a>
                                <form action="{{url('/frutas/'.$item->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button  type='submit' class="btn btn-danger mx-2">Eliminar</button>
                                </form>
                            </td>
                        </tr>  
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        
    </div>

    <div class="p-5">
        <a href="{{url('/')}}">
            <img style="width:3%" src="https://cdn-icons-png.flaticon.com/512/271/271218.png" alt="">
        </a>
    </div>
    
</body>
</html>