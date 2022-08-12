@extends('layouts.layout')

@section('title' , 'Examenes Pre-Quirurgicos')
    
@section('content')
    <h1>Bienvenido al modulo de control</h1>
    <div class=btn-group">
        <a href="controles/create" class="btn btn-dark">Crear nuevo control</a>
      </div>
      <br><br>
      <table class="table table-dark table-stripe">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">N_1 Tiempo de Protrombina</th>
            <th scope="col">N_1 Tiempo de Tromboplastina Parcial</th>
            <th scope="col">N_1 Antitrombina III</th>
            <th scope="col">N_1 Tiempo de Trombina</th>
            <th scope="col">N_1 Fibrinógeno</th>

            <th scope="col">N_2 Tiempo de Protrombina</th>
            <th scope="col">N_2 Tiempo de Tromboplastina Parcial</th>
            <th scope="col">N_2 Antitrombina III</th>
            <th scope="col">N_2 Tiempo de Trombina</th>
            <th scope="col">N_2 Fibrinógeno</th>

            <th scope="col">N_3 Tiempo de Protrombina</th>
            <th scope="col">N_3 Tiempo de Tromboplastina Parcial</th>
            <th scope="col">N_3 Antitrombina III</th>
            <th scope="col">N_3 Tiempo de Trombina</th>
            <th scope="col">N_3 Fibrinógeno</th>
            <th scope="col">Fecha-Hora</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($controles as $control)
            <tr>
                <th scope="row">{{$control->id}}</th>
                <td>{{$control->tp1}}</td>
                <td>{{$control->ptt1}}</td>
                <td>{{$control->at1}}</td>
                <td>{{$control->tt1}}</td>
                <td>{{$control->fb1}}</td>

               <td>{{$control->tp2}}</td>
                <td>{{$control->ptt2}}</td>
                <td>{{$control->at2}}</td>
                <td>{{$control->tt2}}</td>
                <td>{{$control->fb2}}</td>

                <td>{{$control->tp3}}</td>
                <td>{{$control->ptt3}}</td>
                <td>{{$control->at3}}</td>
                <td>{{$control->tt3}}</td>
                <td>{{$control->fb3}}</td>
                <td>{{$control->created_at }}</td>
                
            </tr>
          @endforeach
        </tbody>
      </table>
@endsection

@section('footer')
    <h3>Ingeniería de Software</h3>
@endsection