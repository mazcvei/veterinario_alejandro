@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <section class="container">
            <div class="row">
                <div class="col-12">
                    <h1>PEDIR CITA</h1>

                    <form action="{{route('citas.store')}}" method="post">
                        @csrf
                        <label>Selecciona tu mascota:</label>
                        <select name="mascota" class="form-control">
                            @foreach($mascotas as $key=>$value)
                                <option value="{{$value}}">{{$key}}</option>
                            @endforeach
                        </select>
                        <label>Fecha de la cita:</label>
                        <input class="form-control" type="date" name="fecha_cita">
                        <label>Comentarios:</label>
                        <textarea class="form-control"name="comentario"></textarea>
                        <button type="submit" class="btn btn-primary">Pedir cita</button>
                    </form>
                </div>
            </div>


        </section>
    </div>

@endsection
