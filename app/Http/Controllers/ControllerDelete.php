<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delete as DeleteProyecto;
use App\Services\UFService;

class ControllerDelete extends Controller
{
        public function delete($id)
    {
        dd("Proyecto eliminado correctamente con ID: " . $id);
    }
    public function deleteproyecto($id, $Nombre, $FechadeInicio, $Estado, $Responsable, $Monto)
    {
        $deleteproyecto = new DeleteProyecto();
        $deleteproyecto->id = $id;
        $deleteproyecto->Nombre = $Nombre;
        $deleteproyecto->FechadeInicio = $FechadeInicio;
        $deleteproyecto->Estado = $Estado;
        $deleteproyecto->Responsable = $Responsable;
        $deleteproyecto->Monto = $Monto;

    // Instancia del servicio UF
    $ufService = new UFService();
    $valorUF = $ufService->obtenerUF();

        return view('Delete', compact('deleteproyecto', 'valorUF'));
    }
}
