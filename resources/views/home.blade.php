@extends('layouts.layout')
@section('content')
<div
class="p-5 text-center bg-image opacity-15 position-relative"
style="
  background-image: url('https://www.cienytec.com/JQuery/h-laboratorios-de-investigacion-900x400.jpg');
  background-repeat: no-repeat;
  background-position: center center;
 height: 700px; weight: 500px;
 background-size: cover;
 "
> 
<div class="mask flex-center position-absolute top-0 end-0 bottom-0 start-0;"
 style="background-color: rgba(0, 121, 228, 0.3);">
  <div class="d-flex justify-content-center align-items-center h-80">
    <div class="text-white lh-1">
      <br><br><br><br><br><br><br><br>
      <h2 class="mb-5"><strong>ACERCA DE</strong> </h2>
      <h3 class="mb-5 text-center"><strong> 
        El sistema computarizado de datos del laboratorio a menudo recibe el nombre de Sistema de Gestión
        de la Información del Laboratorio, abreviado con el acrónimo LIMS o LIS. 
        El uso de los sistemas computarizados es muy frecuente en los laboratorios de todo el mundo. Un 
        LIMS con un diseño y una instalación adecuados aporta exactitud y accesibilidad a los flujos de 
        las muestras y los datos del laboratorio clínico. </strong>
   </h3>
    </div>
  </div>
</div>
</div>


@endsection
@section('footer')
@endsection

