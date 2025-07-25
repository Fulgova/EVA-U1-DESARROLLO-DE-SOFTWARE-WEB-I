@extends('layouts.app')

@section('title', 'Nuevo Proyecto') 

@section('content')
    <h2>Datos del Proyecto</h2>
<p><strong>ID:</strong> {{ $Proyecto->id }} </p>
<p><strong>Nombre:</strong> {{ $Proyecto->Nombre }} </p>
<p><strong>Fecha de Inicio:</strong> {{ $Proyecto->FechadeInicio }} </p>
<p><strong>Estado:</strong> {{ $Proyecto->Estado }} </p> 
<p><strong>Responsable:</strong> {{ $Proyecto->Responsable }} </p>
<p><strong>Monto:</strong> {{ $Proyecto->Monto }} </p>
<hr>
    <p><strong>Valor de la UF del día:</strong> 
        {{ $valorUF ? number_format($valorUF, 2, ',', '.') : 'No disponible' }}
    </p>  
@endsection