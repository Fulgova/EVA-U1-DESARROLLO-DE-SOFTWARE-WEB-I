@extends('layouts.app')

@section('title', 'Nuevo Proyecto Agregado') 

@section('content')
    <h2>Datos del Nuevo Proyecto Agregado</h2>
<p><strong>ID:</strong> {{ $postproyecto->id }} </p>
<p><strong>Nombre:</strong> {{ $postproyecto->Nombre }} </p>
<p><strong>Fecha de Inicio:</strong> {{ $postproyecto->FechadeInicio }} </p>
<p><strong>Estado:</strong> {{ $postproyecto->Estado }} </p> 
<p><strong>Responsable:</strong> {{ $postproyecto->Responsable }} </p>
<p><strong>Monto:</strong> {{ $postproyecto->Monto }} </p>
<hr>
    <p><strong>Valor de la UF del día:</strong> 
        {{ $valorUF ? number_format($valorUF, 2, ',', '.') : 'No disponible' }}
    </p>  
@endsection