<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('peliculasAPI.index')}}">peliculas API</a>
        </li>
        <li class="nav-item">
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Busqueda de peliculas por director</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
Selecciona usuario             </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                @foreach ($usuarios as $usuario )
                <li><a class="dropdown-item" href="">{{$usuario->name}}</a></li>

                @endforeach
        
            </ul>
          </div>
      </ul>
    @forelse ($peliculas as $pelicula )
    
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card" style="width: 18rem;">
        <img src="{{$pelicula->poster}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$pelicula->title}}</h5>
          <p class="card-text">{{$pelicula->synopsis}}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
          <a href="#" class="btn btn-danger">Borrar</a>

        </div>
      </div>
        </div>
    </div>
    @empty
        
    @endforelse
    

</body>
</html>