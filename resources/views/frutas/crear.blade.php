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
    <div class="p-5">
        <form method="post" action="{{url('/frutas')}}">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tipo de fruta:</label>
              <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cantidad:</label>
                <input type="number" class="form-control" name="cantidad">
              </div>
            <button type="submit" class="btn btn-primary">INGRESAR</button>
          </form>
    </div>
</body>
</html>