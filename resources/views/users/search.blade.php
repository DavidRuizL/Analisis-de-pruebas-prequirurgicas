@extends('layouts.layout')

@section('title' , 'Examenes Pre-Quirurgicos')
    
@section('content')
<body>
      <div classs="container">
              <h2>Busqueda de usuarios</h2> 
              <div class="row">
                    <div class="col-xl-12">
                          <form action="{{ route('users.search') }}" method="get">
                            @csrf
                                <div class="form-row">
                                    <div class="col-sm-4 my-1">
                                          <input  type="text"  class="form-control" name="documento"value="{{ $documento }}">
                                    </div>
                                    <div class="col-auto my-1">
                                          <input type="submit" class="btn btn-primary" value="Buscar">
                                    </div>
                                </div>
                          </form>
                    </div>
                    <div class="col-xl-12">
                    </div>
              </div>
      </div>
    </body>
         <table class="table table-dark table-stripe">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">APELLIDO</th>
            <th scope="col">DOCUEMNTO</th>
            <th scope="col">EDAD</th>
            <th scope="col">GENERO</th>
            <th scope="col">EPS</th>
          </tr>
        </thead>
        <tbody>
           @if(count($users)<=0)
                  <tr>
                        <td  colspan="7"> No hay resultados </td>
                  </tr>
            @else
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->nombre}}</td>
                <td>{{$user->apellido}}</td>
                <td>{{$user->documento}}</td>
                <td>{{$user->edad}}</td>
                <td>{{$user->genero}}</td>
                <td>{{$user->eps}}</td>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
      </table>
@endsection

@section('footer')
    <h3>Ingeniería de Software</h3>
@endsection