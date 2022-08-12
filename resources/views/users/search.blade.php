@extends('layouts.layout')

@section('title' , 'Examenes Pre-Quirurgicos')
    
@section('content')
<body>
      <div classs="container">
              <h2>Busqueda de usuarios</h2> 
              <div class="row">
                    <div class="col-xl-12">
                          <form action="{{ route('users.search') }}" method="get">
                                <div class="form-row">
                                    <div class="col-sm-4 my-1">
                                          <input  type="search"  class="form-control" name="documento" value= "{{ $documento }}" placeholder="Buscar por documento"/>
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
         <table class="table table-light table-stripe">
        <thead>
          <tr>
            <th scope="col">NOMBRE</th>
            <th scope="col">APELLIDO</th>
            <th scope="col">DOCUMENTO</th>
            <th scope="col">EPS</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$user->nombre ?? ''}}</td>
                <td>{{$user->apellido ?? ''}}</td>
                <td>{{$user->documento ?? ''}}</td>
                <td>{{$user->eps ?? ''}}</td>
                </td>
            </tr>
        </tbody>
      </table>

@endsection

@section('footer')
    <h3>Ingeniería de Software</h3>
@endsection