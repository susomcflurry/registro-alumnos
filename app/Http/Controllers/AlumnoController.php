<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function create()
    {
        return view('alumnos.create');
    }

    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:alumnos,email',
            'telefono' => 'required|string|max:15'
        ]);

        // Crear el registro de alumno en la base de datos
        Alumno::create($request->all());

        
        return redirect()->route('alumnos.create')->with('success', 'Alumno registrado exitosamente');
    }

    public function index()
    {
        $alumnos = Alumno::all();  // Obtener todos los alumnos de la base de datos
        return view('alumnos.index', compact('alumnos'));
    }
}
