<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitasController extends Controller
{
    public function index(){
        $mascotas = Auth::user()->mascotas->pluck('id','nombre');
        return view('cita.pedir-cita',compact('mascotas'));
    }
    public function store(Request $request){
        $request->validate([
            'fecha_cita'=>'required|date|after:today'
        ]);
        Cita::create([
            'user_id'=>Auth::id(),
            'mascota_id'=>$request->mascota,
            'fecha'=>$request->fecha_cita,
            'comentario'=>$request->comentario,
        ]);
        session()->flash('message','Cita creada correctamente.');
        return redirect()->route('citas.usuario');
    }
    public function show(){
        $citasUsuario = Auth::user()->citas;
        return view('cita.citas-usuario',compact('citasUsuario'));
    }
    public function destroy($id){
        $cita = Cita::find($id);
        if($cita->user_id==Auth::id()){
            $cita->delete();
            session()->flash('message','Cita creada correctamente.');
            return redirect()->route('citas.usuario');

        }else{
            session()->flash('message','No tienes permisos para eliminar esta cita.');
            return redirect()->route('citas.usuario');
        }
    }
}
