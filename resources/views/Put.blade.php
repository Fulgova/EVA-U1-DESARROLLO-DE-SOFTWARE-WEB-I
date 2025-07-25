@extends('layouts.app')

@section('title', 'Proyecto Actualizado') 

@section('content')
    <h2>Datos del Proyecto Actualizado</h2>
<p><strong>ID:</strong> {{ $putproyecto->id }} </p>
<p><strong>Nombre:</strong> {{ $putproyecto->Nombre }} </p>
<p><strong>Fecha de Inicio:</strong> {{ $putproyecto->FechadeInicio }} </p>
<p><strong>Estado:</strong> {{ $putproyecto->Estado }} </p> 
<p><strong>Responsable:</strong> {{ $putproyecto->Responsable }} </p>
<p><strong>Monto:</strong> {{ $putproyecto->Monto }} </p>
<hr>
    <p><strong>Valor de la UF del día:</strong> 
        {{ $valorUF ? number_format($valorUF, 2, ',', '.') : 'No disponible' }}
    </p>  
@endsection