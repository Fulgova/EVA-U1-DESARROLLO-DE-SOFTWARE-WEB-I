<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Services\UFService;

class RutaController extends Controller
{
    public function get()
    {
        dd("Lista de proyectos obtenida correctamente.");
    }
    public function getid($id)
    {
        dd("Proyecto encontrado con ID: " . $id);
    }
    public function nuevoproyecto($id, $Nombre, $FechadeInicio, $Estado, $Responsable, $Monto)
    {
        $Proyecto = new Proyecto();
        $Proyecto->id = $id;
        $Proyecto->Nombre = $Nombre;
        $Proyecto->FechadeInicio = $FechadeInicio;
        $Proyecto->Estado = $Estado;
        $Proyecto->Responsable = $Responsable;
        $Proyecto->Monto = $Monto;

        // Instancia del servicio UF
    $ufService = new UFService();
    $valorUF = $ufService->obtenerUF();

    return view('Proyecto', compact('Proyecto', 'valorUF'));
        
    }
}
