@extends('layouts.layout')

@section('title' , 'Examenes Pre-Quirurgicos')
    
@section('content')
    <h1>Bienvenido al modulo de control</h1>
    <style>
  
      table, th, td {
        padding: 5px;
        text-align:center;
              
      }
      </style>
      <br><br>
      <div class="container" >
        <table border="1" class="table table-hover table-ligth  table-bordered">
          <thead class="table-secondary">
            <tr>
              <th rowspan="2">Fecha - Hora</th>
              <th colspan="5">Nivel 1</th>
              <th colspan="5">Nivel 2</th>
              <th colspan="5">Nivel 3</th>
            </tr>
            <tr>
              <th scope="col">TP</th>
              <th scope="col">PTT</th>
              <th scope="col">AT_III</th>
              <th scope="col">TT</th>
              <th scope="col">Fibrinógeno</th>

              <th scope="col">TP</th>
              <th scope="col">PTT</th>
              <th scope="col">AT_III</th>
              <th scope="col">TT</th>
              <th scope="col">Fibrinógeno</th>

              <th scope="col">TP</th>
              <th scope="col">PTT</th>
              <th scope="col">AT_III</th>
              <th scope="col">TT</th>
              <th scope="col">Fibrinógeno</th>
            </tr>
          </thead>
          <style>
              .fuera {background-color : #e06464 !important; }
            </style>
            <tbody>
              @foreach ($controles as $control)
              <tr>
                  <th scope="row">{{$control->created_at }}</th>

  {{-- NIVEL 1 --}}

                  @if(($control->tp1 >=10.6) AND ($control->tp1 <=15.8) )
                    <td>{{$control->tp1}}</td>
                  @else               
                    <td class="fuera">{{$control->tp1}}</td>
                  @endif

                  @if(($control->ptt1 >=24.1) AND ($control->ptt1 <=36.1) )
                    <td>{{$control->ptt1}}</td>
                  @else               
                    <td class="fuera">{{$control->ptt1}}</td>
                  @endif
                  
                  @if(($control->at1 >=89.1) AND ($control->at1 <=134) )
                    <td>{{$control->at1}}</td>
                  @else               
                    <td class="fuera">{{$control->at1}}</td>
                  @endif
                  
                  @if(($control->tt1 >=13.7) AND ($control->tt1 <=20.5) )
                    <td>{{$control->tt1}}</td>
                  @else               
                    <td class="fuera">{{$control->tt1}}</td>
                  @endif
                  
                  @if(($control->fb1 >=276) AND ($control->fb1 <=414) )
                    <td>{{$control->fb1}}</td>
                  @else               
                    <td class="fuera">{{$control->fb1}}</td>
                  @endif


                  
  {{-- NIVEL 2 --}}

                  @if(($control->tp2 >=32.3) AND ($control->tp2 <=48.4) )
                    <td>{{$control->tp2}}</td>
                  @else               
                    <td class="fuera">{{$control->tp2}}</td>
                  @endif

                  @if(($control->ptt2 >=48.9) AND ($control->ptt2 <=73.4) )
                    <td>{{$control->ptt2}}</td>
                  @else               
                    <td class="fuera">{{$control->ptt2}}</td>
                  @endif
                  
                  @if(($control->at2 >=48.3) AND ($control->at2 <=72.4) )
                    <td>{{$control->at2}}</td>
                  @else               
                    <td class="fuera">{{$control->at2}}</td>
                  @endif
                  
                  @if(($control->tt2 >=18.4) AND ($control->tt2 <=27.6) )
                    <td>{{$control->tt2}}</td>
                  @else               
                    <td class="fuera">{{$control->tt2}}</td>
                  @endif
                  
                  @if(($control->fb2 >=123) AND ($control->fb2 <=184) )
                    <td>{{$control->fb2}}</td>
                  @else               
                    <td class="fuera">{{$control->fb2}}</td>
                  @endif
                  
                  
  {{-- NIVEL 3--}}

                  @if(($control->tp3 >=45.2) AND ($control->tp3 <=67.6) )
                    <td>{{$control->tp3}}</td>
                  @else               
                    <td class="fuera">{{$control->tp3}}</td>
                  @endif

                  @if(($control->ptt3 >=55.9) AND ($control->ptt3 <=83.8) )
                    <td>{{$control->ptt3}}</td>
                  @else               
                    <td class="fuera">{{$control->ptt3}}</td>
                  @endif
                  
                  @if(($control->at3 >=34) AND ($control->at3 <=51) )
                    <td>{{$control->at3}}</td>
                  @else               
                    <td class="fuera">{{$control->at3}}</td>
                  @endif
                  
                  @if(($control->tt3 >=21.9) AND ($control->tt3 <=32.9) )
                    <td>{{$control->tt3}}</td>
                  @else               
                    <td class="fuera">{{$control->tt3}}</td>
                  @endif
                  
                  @if(($control->fb3 >=84.9) AND ($control->fb3 <=127) )
                    <td>{{$control->fb3}}</td>
                  @else               
                    <td class="fuera">{{$control->fb3}}</td>
                  @endif

              </tr>
            @endforeach
          </tbody>
        </table>
    </div>
@endsection

@section('footer')
    <h3>Ingeniería de Software</h3>
@endsection