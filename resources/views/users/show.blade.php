@extends('layouts.layout')

@section('title' , 'Examenes Pre-Quirurgicos')
    
@section('content')
    <style>
      table, th, td {
        padding: 5px;
        text-align:center;         
      }
      </style>
      <br><br>
<div class= 'container'>
    <h1 align="center">Resultados de {{$user->nombre}}</h1>
      <table class="table table-light table-stripe">
        <thead>
          <tr>
            <th scope="col">NOMBRE</th>
            <th scope="col">APELLIDO</th>
            <th scope="col">DOCUEMNTO</th>
            <th scope="col">EDAD</th>
            <th scope="col">GENERO</th>
            <th scope="col">EPS</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$user->nombre}}</td>
                <td>{{$user->apellido}}</td>
                <td>{{$user->documento}}</td>
                <td>{{$user->edad}}</td>
                <td>{{$user->genero}}</td>
                <td>{{$user->eps}}</td>
                </td>
            </tr>
        </tbody>
      </table>

      </body>
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
      <div class="col text-center">
            <form action="{{route('users.index')}}" method="get">
              <button type="submit" class="btn btn-primary  col text-center">Atrás</button>
            </form>
      </div>
@endsection

@section('footer')

@endsection