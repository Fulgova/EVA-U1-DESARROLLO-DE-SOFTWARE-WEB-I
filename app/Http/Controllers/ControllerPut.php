<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UFService;
use App\Models\Put as PutProyecto;
class ControllerPut extends Controller
{
     public function put($id)
    {
        dd("Proyecto actualizado correstamente con ID: " . $id);
    }
    public function putproyecto($id, $Nombre, $FechadeInicio, $Estado, $Responsable, $Monto)
    {
        $putproyecto = new PutProyecto();
        $putproyecto->id = $id;
        $putproyecto->Nombre = $Nombre;
        $putproyecto->FechadeInicio = $FechadeInicio;
        $putproyecto->Estado = $Estado;
        $putproyecto->Responsable = $Responsable;
        $putproyecto->Monto = $Monto;

    // Instancia del servicio UF
    $ufService = new UFService();
    $valorUF = $ufService->obtenerUF();

        return view('Put', compact('putproyecto', 'valorUF'));
    }
}
