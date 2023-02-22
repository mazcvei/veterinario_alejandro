@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <section class="container">
            <div class="row">
                <div class="col-12">
                    @if(session()->has('message'))
                        <p style="color:green;font-weight: bold">{{session()->get('message')}}</p>
                    @endif
                    <h1>LISTADO DE CITAS DEL USUARIO {{\Illuminate\Support\Facades\Auth::user()->name}}</h1>
                        <div class="table-responsive">
                        <table class="table">
                            <caption>List of users</caption>
                            <thead>
                            <tr>
                                <th scope="col">Número de la cita</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Mascota</th>
                                <th scope="col">Comentarios</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($citasUsuario as $cita)
                            <tr>
                                <th scope="row">{{$cita->id}}</th>
                                <td>{{$cita->fecha}}</td>
                                <td>{{$cita->mascota->nombre}}</td>
                                <td>{{$cita->comentario}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('cita.drestoy',$cita->id)}}">Eliminar cita</a>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                        </div>

                </div>
            </div>
        </section>
    </div>

@endsection
