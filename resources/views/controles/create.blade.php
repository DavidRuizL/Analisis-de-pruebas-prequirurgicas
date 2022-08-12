@extends('layouts.layout')

@section('title' , 'Ingresar nuevo control')

@section('content')
<div class='container'>
    <form action="{{route('controles.index')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nivel 1 TP: </label>
            <input type="text" id="tp1" name="tp1" class="form-control" tabindex="2" placeholder="Ingrese nivel 1 de TP">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nivel 1 PTT: </label>
            <input type="text" id="ptt1" name="ptt1" class="form-control" tabindex="3" placeholder="Ingrese nivel 1 de PTT">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nivel 1 AT: </label>
            <input type="text" id="at1" name="at1" class="form-control" tabindex="4" placeholder="Ingrese nivel 1 de AT">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Nivel 1 TT: </label>
            <input type="text" id="tt1" name="tt1" class="form-control" tabindex="5" placeholder="Ingrese nivel 1 de TT">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nivel 1 FB: </label>
            <input type="text" id="fb1" name="fb1" class="form-control" tabindex="6" placeholder="Ingrese nivel 1 de FB">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Nivel 2 TP: </label>
            <input type="text" id="tp2" name="tp2" class="form-control" tabindex="7" placeholder="Ingrese nivel 2 de TP">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nivel 2 PTT: </label>
            <input type="text" id="ptt2" name="ptt2" class="form-control" tabindex="8" placeholder="Ingrese nivel 2 de PTT">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nivel 2 AT: </label>
            <input type="text" id="at2" name="at2" class="form-control" tabindex="9" placeholder="Ingrese nivel 2 de AT"> 
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Nivel 2 TT: </label>
            <input type="text" id="tt2" name="tt2" class="form-control" tabindex="10" placeholder="Ingrese nivel 2 de TT">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nivel 2 FB: </label>
            <input type="text" id="fb2" name="fb2" class="form-control" tabindex="11" placeholder="Ingrese nivel 2 de FB">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Nivel 3 TP: </label>
            <input type="text" id="tp3" name="tp3" class="form-control" tabindex="12" placeholder="Ingrese nivel 3 de TP">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nivel 3 PTT: </label>
            <input type="text" id="ptt3" name="ptt3" class="form-control" tabindex="13" placeholder="Ingrese nivel 3 de PTT">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nivel 3 AT: </label>
            <input type="text" id="at3" name="at3" class="form-control" tabindex="14" placeholder="Ingrese nivel 3 de AT">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Nivel 3 TT: </label>
            <input type="text" id="tt3" name="tt3" class="form-control" tabindex="15" placeholder="Ingrese nivel 3 de TT">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nivel 3 FB: </label>
            <input type="text" id="fb3" name="fb3" class="form-control" tabindex="16" placeholder="Ingrese nivel 3 de FB">
        </div>
        <a href="/controles" class="btn bnt-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class= "btn bnt-primary" tabindex="6">Guardar</button>
    </form>
</div>
@endsection