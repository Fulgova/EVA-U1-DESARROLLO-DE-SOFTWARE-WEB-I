<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UFService;
use App\Models\Get as GetProyecto;

class ControllerGet extends Controller
{
    public function get()
    {
        dd("Lista de proyectos obtenida correctamente.");
    }
    public function getid($id)
    {
        dd("Proyecto encontrado con ID: " . $id);
    }
    public function getproyecto($id, $Nombre, $FechadeInicio, $Estado, $Responsable, $Monto)
    {
        $getproyecto = new GetProyecto();
        $getproyecto->id = $id;
        $getproyecto->Nombre = $Nombre;
        $getproyecto->FechadeInicio = $FechadeInicio;
        $getproyecto->Estado = $Estado;
        $getproyecto->Responsable = $Responsable;
        $getproyecto->Monto = $Monto;

        // Instancia del servicio UF
    $ufService = new UFService();
    $valorUF = $ufService->obtenerUF();

    return view('Get', compact('getproyecto', 'valorUF'));
        
    }
}
