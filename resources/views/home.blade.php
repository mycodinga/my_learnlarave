<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laeafel 9 | home</title>
    {{-- csss bostrap pakai cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PPLG </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">project</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        <h1>ini halaman home</h1>
        <h2>selamat datang, {{$name}}.anda adalah {{$role}}</h2>   {{--name variable yang di buat di folder file route web--}}
     
        {{-- @if ($role == 'admin')
        <a href="">kehalaman admin</a>
        @elseif($role == 'staff')
        <a href="">kehalaman project</a>
        @else
         <a href="">ke halaman gakjelas</a>
            @endif --}}

            @switch($role)
                @case($role == 'admin')
                    <a href="">kehalaman admin</a>
                    @break

                    @case($role== 'staff')
                    <a href="">kehalaman project</a>
                    @break

                @default
                    <a href="">kehalaman gak jelas</a>
            @endswitch
            
      </div>
    {{-- <button class="btn btn-primary"> test</button> --}}
      {{-- javascript bosstrap pake cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>