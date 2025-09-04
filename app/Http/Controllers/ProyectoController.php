<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use Illuminate\Support\Facades\Validator;

class ProyectoController extends Controller
{
    public function store(Request $request)
    {
        //Regla de validación
        $rules = [
            "nombre" => "required|string|max:255",
            "fecha_inicio" => "required|date",
            "estado" => "required|string|max:100",
            "responsable" => "required|string|max:255",
            "monto" => "required|numeric|min:0",
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(
                [
                    "mensaje" => "Validación de campos con error ❌",
                    "errores" => $validator->errors(),
                ],
                422
            );
        }

        //Obtener datos validados
        $data = $validator->validated();

        //Obtener el ID del usuario autenticado
        $userId = auth()->id();

        //Asignar created_by
        $data["created_by"] = $userId;

        //Crear el proyecto
        $proyecto = Proyecto::create($data);

        return response()->json(
            [
                "mensaje" => "Proyecto creado correctamente ✅",
                "detalles" => [
                    "proyecto" => $proyecto,
                ],
            ],
            201
        );
    }

    public function index()
    {
        $proyecto = Proyecto::all();

        return response()->json($proyecto, 200);
    }

    public function show($id)
    {
        $proyecto = Proyecto::find($id);

        if (!$proyecto) {
            return response()->json(
                ["error" => "Proyecto no encontrado ❌"],
                404
            );
        }

        return response()->json($proyecto, 200);
    }

    public function updatePut(Request $request, $id)
    {
        $proyecto = Proyecto::find($id);

        if (!$proyecto) {
            return response()->json(
                ["error" => "Proyecto no encontrado ❌"],
                404
            );
        }

        //Regla de validación
        $rules = [
            "nombre" => "required|string|max:255",
            "fecha_inicio" => "required|date",
            "estado" => "required|string|max:100",
            "responsable" => "required|string|max:255",
            "monto" => "required|numeric|min:0",
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(
                [
                    "mensaje" => "Validación de campos con error ❌",
                    "errores" => $validator->errors(),
                ],
                422
            );
        }

        //Datos validados
        $data = $validator->validated();

        //Actualizar el proyecto
        $proyecto->update($data);

        return response()->json(
            [
                "mensaje" => "Proyecto actualizado correctamente ✅",
                "detalles" => [
                    "proyecto" => $proyecto,
                ],
            ],
            200
        );
    }

    public function updatePatch(Request $request, $id)
    {
        $proyecto = Proyecto::find($id);

        if (!$proyecto) {
            return response()->json(
                ["error" => "Proyecto no encontrado ❌"],
                404
            );
        }

        //Validar solo los campos presentes en la solicitud
        $request->validate([
            "nombre" => "sometimes|required|string|max:255",
            "fecha_inicio" => "sometimes|required|date",
            "estado" => "sometimes|required|string|max:100",
            "responsable" => "sometimes|required|string|max:255",
            "monto" => "sometimes|required|numeric|min:0",
        ]);

        $proyecto->update($request->all());

        return response()->json(
            [
                "mensaje" => "Proyecto actualizado correctamente ✅",
                "detalles" => [
                    "proyecto" => $proyecto,
                ],
            ],
            200
        );
    }

    public function destroy($id)
    {
        $proyecto = Proyecto::find($id);

        if (!$proyecto) {
            return response()->json(
                [
                    "mensaje" => "Proyecto no encontrado ❌",
                ],
                404
            );
        }

        $proyecto->delete();

        return response()->json(
            [
                "mensaje" => "Proyecto eliminado correctamente ✅",
            ],
            204
        );
    }
}