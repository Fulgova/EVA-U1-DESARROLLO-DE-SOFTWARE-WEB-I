<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UFService;
use App\Models\Post as PostProyecto;

class ControllerPost extends Controller
{
     public function post($id)
    {
        dd("Proyecto ingresado correctamente con ID: " . $id);
    }
    public function postproyecto($id, $Nombre, $FechadeInicio, $Estado, $Responsable, $Monto)
    {
        $postproyecto = new PostProyecto();
        $postproyecto->id = $id;
        $postproyecto->Nombre = $Nombre;
        $postproyecto->FechadeInicio = $FechadeInicio;
        $postproyecto->Estado = $Estado;
        $postproyecto->Responsable = $Responsable;
        $postproyecto->Monto = $Monto;

    // Instancia del servicio UF
    $ufService = new UFService();
    $valorUF = $ufService->obtenerUF();

        return view('Post', compact('postproyecto', 'valorUF'));
    }
}
