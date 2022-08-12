@extends('layouts.layout')

@section('title' , 'Ingresar nuevo ususario')

@section('content')
    <form action="/users" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Documento:</label>
            <input type="text" id="documento" name="documento" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre: </label>
            <input type="text" id="nombre" name="nombre" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellidos: </label>
            <input type="text" id="apellido" name="apellido" class="form-control" tabindex="4">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">eps: </label>
            <input type="text" id="eps" name="eps" class="form-control" tabindex="5">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Género: </label>
            <input type="text" id="genero" name="genero" class="form-control" tabindex="6">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Edad: </label>
            <input type="text" id="edad" name="edad" class="form-control" tabindex="7">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">TP: </label>
            <input type="text" id="tp" name="tp" class="form-control" tabindex="8">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">PTT: </label>
            <input type="text" id="ptt" name="ptt" class="form-control" tabindex="9">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">AT: </label>
            <input type="text" id="at" name="at" class="form-control" tabindex="10">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">TT: </label>
            <input type="text" id="tt" name="tt" class="form-control" tabindex="11">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">FB: </label>
            <input type="text" id="fb" name="fb" class="form-control" tabindex="12">
        </div>
        <a href="/users" class="btn bnt-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class= "btn bnt-primary" tabindex="6">Guardar</button>
    </form>
@endsection

