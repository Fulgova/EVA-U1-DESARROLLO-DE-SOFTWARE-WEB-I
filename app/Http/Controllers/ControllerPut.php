<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPut extends Controller
{
     public function put($id)
    {
        dd("Proyecto actualizado correstamente con ID: " . $id);
    }
}
