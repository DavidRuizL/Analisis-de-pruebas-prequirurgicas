@extends('layouts.layout')

@section('title' , 'Examenes Pre-Quirurgicos')
    
@section('content')
    <h1>Ver Usuario</h1>
      <br><br>
      <table class="table table-dark table-stripe">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBREww</th>
            <th scope="col">APELLIDO</th>
            <th scope="col">DOCUEMNTO</th>
            <th scope="col">EDAD</th>
            <th scope="col">GENERO</th>
            <th scope="col">EPS</th>
          </tr>
        </thead>
        <tbody>
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
        </tbody>
      </table>
@endsection

@section('footer')
    <h3>Ingeniería de Software</h3>
@endsection