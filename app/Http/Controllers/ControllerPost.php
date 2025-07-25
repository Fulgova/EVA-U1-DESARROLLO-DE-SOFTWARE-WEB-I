<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPost extends Controller
{
     public function post($id)
    {
        dd("Proyecto ingresado correctamente con ID: " . $id);
    }
}
