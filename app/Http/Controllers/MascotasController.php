<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MascotasController extends Controller
{
    public function index(){
        return view('mascotas.alta-mascotas');
    }
    public function store(Request $request){

        Mascota::create([
            'nombre'=>$request->nombre,
            'edad'=>$request->edad,
            'raza'=>$request->raza,
            'user_id'=>Auth::id(),
        ]);
        session()->flash('message','Se ha dado de alta correctamente');
        return redirect()->route('alta.mascotas');
    }
}
