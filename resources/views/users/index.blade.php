@extends('layouts.layout')

@section('title' , 'Examenes Pre-Quirurgicos')
    
@section('content')
    <h1>Bienvenido a la lista de usuarios</h1>
      <br><br>
      <table class="table table-light table-stripe">
        <thead>
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

@endsection

@section('footer')
    <h3>Ingeniería de Software</h3>
@endsection