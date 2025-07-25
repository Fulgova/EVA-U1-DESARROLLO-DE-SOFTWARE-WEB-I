@extends('layouts.app')

@section('title', 'Nuevo Proyecto') 

@section('content')
    <h2>Datos del Proyecto Listado</h2>
<p><strong>ID:</strong> {{ $getproyecto->id }} </p>
<p><strong>Nombre:</strong> {{ $getproyecto->Nombre }} </p>
<p><strong>Fecha de Inicio:</strong> {{ $getproyecto->FechadeInicio }} </p>
<p><strong>Estado:</strong> {{ $getproyecto->Estado }} </p> 
<p><strong>Responsable:</strong> {{ $getproyecto->Responsable }} </p>
<p><strong>Monto:</strong> {{ $getproyecto->Monto }} </p>
<hr>
    <p><strong>Valor de la UF del día:</strong> 
        {{ $valorUF ? number_format($valorUF, 2, ',', '.') : 'No disponible' }}
    </p>  
@endsection