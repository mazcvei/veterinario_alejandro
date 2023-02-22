@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <section class="container">
            <div class="row">
                <div class="col-12">
                    @if(session()->has('message'))
                        <p style="color:green;font-weight: bold">{{session()->get('message')}}</p>
                    @endif
                    <h1>ALTA MASCOTAS</h1>

                    <form action="{{route('mascotas.store')}}" method="post">
                        @csrf
                        <label>Nombre de la mascota:</label>
                        <input class="form-control" type="text" name="nombre" placeholder="Nombre de la mascota">
                        <label>Edad de la mascota:</label>
                        <input class="form-control" type="number" name="edad" placeholder="">
                        <label>Raza de la mascota:</label>
                        <input class="form-control" type="text" name="raza" placeholder="Raza de la mascota">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>


        </section>
    </div>

@endsection
