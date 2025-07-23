<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class RutaController extends Controller
{
    public function get()
    {
        dd("Entre al get");
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

        return view('Proyecto', compact('Proyecto'));
        
    }
}
