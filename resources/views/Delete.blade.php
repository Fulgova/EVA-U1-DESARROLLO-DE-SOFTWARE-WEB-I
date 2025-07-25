@extends('layouts.app')

@section('title', 'Proyecto Eliminado') 

@section('content')
    <h2>Datos del Proyecto eliminado</h2>
<p><strong>ID:</strong> {{ $deleteproyecto->id }} </p>
<p><strong>Nombre:</strong> {{ $deleteproyecto->Nombre }} </p>
<p><strong>Fecha de Inicio:</strong> {{ $deleteproyecto->FechadeInicio }} </p>
<p><strong>Estado:</strong> {{ $deleteproyecto->Estado }} </p> 
<p><strong>Responsable:</strong> {{ $deleteproyecto->Responsable }} </p>
<p><strong>Monto:</strong> {{ $deleteproyecto->Monto }} </p>
<hr>
    <p><strong>Valor de la UF del día:</strong> 
        {{ $valorUF ? number_format($valorUF, 2, ',', '.') : 'No disponible' }}
    </p>  
@endsection