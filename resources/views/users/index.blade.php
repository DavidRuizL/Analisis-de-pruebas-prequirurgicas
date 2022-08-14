@extends('layouts.layout')

@section('title' , 'Examenes Pre-Quirurgicos')
    
@section('content')
    <style>
      table, th, td {
        padding: 5px;
        text-align:center;         
      }
      </style>
    <h1>Bienvenido a la lista de usuarios</h1>
      <br><br>
      <div class="container">
        <table  border ="1"  class="table table-light table-stripe table-hover ">
          <thead class="table-secondary">
            <tr>
              <th scope="col">NOMBRE</th>
              <th scope="col">APELLIDO</th>
              <th scope="col">DOCUMENTO</th> 
              <th scope="col">EPS</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
              @foreach ($users as $user)
              <tr>
                  <td>{{$user->nombre}}</td>
                  <td>{{$user->apellido}}</td>
                  <td>{{$user->documento}}</td>
                  <td>{{$user->eps}}</td>
                  <td>
                    <form action="{{route('users.show' , $user->id)}}" method="get">  
                      @csrf
                      <button type="submit" class="btn btn-primary">Ver</button>
                    </form>
                  </td>
              </tr>
            @endforeach
          </tbody>
        </table>
    </div>
    

@endsection

@section('footer')
    <h3>Ingeniería de Software</h3>
@endsection