@extends('layouts.layout')

@section('title' , 'Examenes Pre-Quirurgicos')
    
@section('content')
    <h1>Bienvenido a la lista de usuarios</h1>
    <div class=btn-group">
        <a href="users/create" class="btn btn-dark">Crear nuevo usuario</a>
      </div>
      <br><br>
      <table class="table table-light table-stripe">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">APELLIDO</th>
            <th scope="col">DOCUMENTO</th> 
            <th scope="col">EPS</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
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