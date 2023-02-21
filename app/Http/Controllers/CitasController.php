<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitasController extends Controller
{
    public function index(){
        //TODO=> Mostrar listado de mascotas del usuario y formulario para cita
        //return view('mascotas.alta-mascotas');
    }
    public function store(){
        return redirect()->route('mascotas.index');
    }
    public function show(){
        //TODO=> Mostrar listado citas del usuario
        return redirect()->route('mascotas.index');
    }
    public function destroy(){
        //TODO=> Eliminar cita del usuario
        return redirect()->route('citas.usuario');
    }
}
