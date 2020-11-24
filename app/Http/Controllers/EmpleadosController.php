<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index()
    {
        $entity = empleado::get();
        return view('CatalogoEmpleadosTable', compact('entity'));
    }


    public function create()
    {
        return view('CatalogoEmpleadosForm');
    }

    public function registrar(Request $entity)
    {
        if ($entity->id != null) {
            $usuario = empleado::find($entity->id);
        } else {
            $usuario = new empleado();
        }
        $usuario->codigo_empleado = $entity->codigo_empleado;
        $usuario->nombre = $entity->nombre;
        $usuario->apellido_paterno = $entity->apellido_paterno;
        $usuario->apellido_materno = $entity->apellido_materno;
        $usuario->puesto = $entity->puesto;
        $usuario->sueldo = $entity->sueldo;
        $usuario->tipo_moneda_sueldo = $entity->tipo_moneda_sueldo;
        $usuario->correo = $entity->correo;
        $usuario->save();
        return redirect()->route('empleado.index');
    }

    public function eliminar(empleado $empleados)
    {
        $empleados->delete();
        return redirect()->route('empleado.index');
    }

    public function editar(empleado $entity)
    {
        return view('CatalogoEmpleadosForm', compact('entity'));
    }
}
