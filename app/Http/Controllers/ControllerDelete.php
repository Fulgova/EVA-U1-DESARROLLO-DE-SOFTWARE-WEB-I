<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerDelete extends Controller
{
        public function delete($id)
    {
        dd("Proyecto eliminado correctamente con ID: " . $id);
    }
}
