@extends('layouts.layout')

@section('title' , 'Ingresar nuevo ususario')

@section('content')
<div class='container'>
    <form action="/users" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Documento:</label>
            <input type="text" id="documento" name="documento" class="form-control" tabindex="2" placeholder="Ingrese el documento de identidad">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre: </label>
            <input type="text" id="nombre" name="nombre" class="form-control" tabindex="3" placeholder="Ingrese el nombre">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellidos: </label>
            <input type="text" id="apellido" name="apellido" class="form-control" tabindex="4" placeholder="Ingrese los apellidos">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Eps: </label>
            <!--<input type="text" id="eps" name="eps" class="form-control" tabindex="5" placeholder="Ingrese la eps">-->
            <select class="form-select" id="eps" name="eps" class="form-control" tabindex="5">
                <option selected>Seleccionar...</option>
                <option value="SANITAS">SANITAS</option>
                <option value="SURA">SURA</option>
                <option value="NUEVA EPS">NUEVA EPS</option>
                <option value="OTRA">Otra</option>
              </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Género: </label>
        <!--<input type="text" id="genero" name="genero" class="form-control" tabindex="6" placeholder="Ingrese género">-->
            <select class="form-select" id="genero" name="genero" class="form-control" tabindex="6">
                <option selected>Seleccionar...</option>
                <option value="MASCULINO">Masculino</option>
                <option value="FEMENINO">Femenino</option>
              </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Edad: </label>
            <input type="text" id="edad" name="edad" class="form-control" tabindex="7" placeholder="Ingrese la edad">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">TP: </label>
            <input type="text" id="tp" name="tp" class="form-control" tabindex="8" placeholder="Ingrese Tiempo de protombina">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">PTT: </label>
            <input type="text" id="ptt" name="ptt" class="form-control" tabindex="9" placeholder=" Ingrese Tiempo de Tromboplastina Parcial">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">AT: </label>
            <input type="text" id="at" name="at" class="form-control" tabindex="10" placeholder="Ingrese Tiempo de Antitrombina">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">TT: </label>
            <input type="text" id="tt" name="tt" class="form-control" tabindex="11" placeholder="Ingrese Tiempo de Trombina">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">FB: </label>
            <input type="text" id="fb" name="fb" class="form-control" tabindex="12" placeholder="Fibrinógeno">
        </div>
        <a href="/users" class="btn bnt-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class= "btn bnt-primary" tabindex="6">Guardar</button>
    </form>
</div>
@endsection

