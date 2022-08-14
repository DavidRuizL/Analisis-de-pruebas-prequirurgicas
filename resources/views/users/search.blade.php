@extends('layouts.layout')

@section('title' , 'Examenes Pre-Quirurgicos')
    
@section('content')
    <style>
      table, th, td {
        padding: 5px;
        text-align:center;         
      }
      </style>
<div class= 'container'>
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

      </body>

      @if($user->id ?? ''!=null)
          <table class="table table-light table-stripe">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">TP</th>
              <th scope="col">PTT</th>
              <th scope="col">AT</th>
              <th scope="col">TT</th>
              <th scope="col">FB</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                    <td>Resultado</td>  
                  <td>{{$user->tp ?? ''}}</td>
                  <td>{{$user->ptt ?? ''}}</td>
                  <td>{{$user->at ?? ''}}</td>
                  <td>{{$user->tt ?? ''}}</td>
                  <td>{{$user->fb ?? ''}}</td>
                  </td>
              </tr>
              <tr>
                    <td scope="col">rangos normales</td>     
                    <td scope="col">11s - 13.5s seg</td>
                    <td scope="col">25s - 35s</td>
                    <td scope="col">80% - 120%</td>
                    <td scope="col">-</td>
                    <td scope="col">200mg/dL - 400 mg/dL</td>
            </tr>
          </tbody>
         </table>
         @endif
</div>

@endsection

@section('footer')
    <h3>Ingeniería de Software</h3>
@endsection