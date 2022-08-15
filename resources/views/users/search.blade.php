@extends('layouts.layout')

@section('title' , 'Examenes Pre-Quirurgicos')
    
@section('content')
    <style>
      table, th, td {
        padding: 5px;
        text-align:center;         
      }
      </style>

<body>
<div class= 'container'>
      <div classs="container ">
              <h2>Busqueda de usuarios</h2> 
              <div class="row">
                    <div class="col-xl-12 col-sm-4 my-1 col-auto my-1">
                          <form action="{{ route('users.search') }}" method="get">
                                <div class="btn-group">
                                          <input  type="search"  class="form-control" name="documento" value= "{{ $documento }}" placeholder="Buscar por documento">
                                          <button type="submit" class="btn btn-primary" >Buscar</button>
                                </div>
                          </form>
              </div>
      </div>
    </body>
        <br><br>
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
                    <th>Resultado</th>  
                  <td>{{$user->tp ?? ''}}</td>
                  <td>{{$user->ptt ?? ''}}</td>
                  <td>{{$user->at ?? ''}}</td>
                  <td>{{$user->tt ?? ''}}</td>
                  <td>{{$user->fb ?? ''}}</td>
                  </td>
              </tr>
              <tr>
                    <th scope="col">Rangos normales</th>     
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

@endsection