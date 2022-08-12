<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body>
    <h1>Examenes Pre-Quirurgicos</h1>
    <div class="bg-light">
      <nav class="navbar navbar-dark bg-success">
              <div class="container-fluid">
                  <a href="#" class="navbar-brand">MENÚ</a>
                  <button type="button"
                      class="navbar-toggler"
                      data-bs-toggle="collapse"
                      data-bs-target="#MenuNavegacion">
                          <span class="navbar-toggler-icon"></span>
                  </button>
              </div>
    
        <div id="MenuNavegacion" class="collapse navbar-collapse">
          <ul class="navbar-nav ms-3">
            {{-- <li class="nav-item">
                          <a class="nav-link active" href="#">Ingreso de paciente</a>
                      </li>
            <li class="nav-item">
              <form action="{{route('users.index')}}" method="get">
                          <a class="nav-link active" href="{{route('users.index')}}">Consulta masiva</a>
                      </li>
            <li class="nav-item">
                          <a class="nav-link active" href="{{route('users.search')}}">Consulta de paciente</a>
                      </li> --}}

                      <li class="nav-item active dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                          USUARIOS
                        </a>
                        <ul class="dropdown-menu">
                          <form action="{{route('users.create')}}" method="get">
                            <li><a class="dropdown-item" href="{{route('users.create')}}">Ingreso de datos</a></li>
                          </form>
                          <form action="{{route('users.index')}}" method="get">
                            <li><a class="dropdown-item" href="{{route('users.index')}}">Consulta masiva de paciente</a></li>
                          </form>
                          <form action="{{route('users.search')}}" method="get">
                            <li><a class="dropdown-item" href="{{route('users.search')}}">Consulta de paciente</a></li>
                          </form>
                        </ul>
                    </li>


                      <li class="nav-item active dropdown">
                          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            CONTROL DE CALIDAD
                          </a>
                          <ul class="dropdown-menu">
                            <form action="{{route('users.search')}}" method="get">
                              <li><a class="dropdown-item" href="{{route('users.search')}}">Ingreso de datos</a></li>
                            </form>
                            <form action="{{route('users.search')}}" method="get">
                              <li><a class="dropdown-item" href="{{route('users.search')}}">Consulta</a></li>
                            </form>
                          </ul>
                      </li>
          </ul>
        </div>
      </nav>
    </div>



    @yield('content')
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  
  


  <footer class="main-footer" style="margin-bottom: 0px !important; position: relative; position:fixed;
  left:0px;
  bottom:0px;">
    <div class="float-right d-none d-xs-block">
      <b>Version</b> 4.0.8
    </div>
    <strong>Contactenos:  </strong> 99999999.
  </footer>