@extends('layouts.layout')

@section('title' , 'Examenes Pre-Quirurgicos')
    
@section('content')
    <h1>Bienvenido a la lista de usuarios</h1>
    <div class="btn-group">
        <a href="users/create" class="btn btn-primary" aria-current="page">Nuevo examen</a>
      </div>
      <br><br>
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
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->nombre}}</td>
                <td>{{$user->apellido}}</td>
                <td>{{$user->documento}}</td>
                <td>{{$user->edad}}</td>
                <td>{{$user->genero}}</td>
                <td>{{$user->eps}}</td>
                <td>
                  <form action="{{route('users.destroy' , $user->id)}}" method="POST">  
                    <a href="devices/{{$user->id}}/edit" class="btn btn-info"> Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
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