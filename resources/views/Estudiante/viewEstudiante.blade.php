@extends('layauts.base') <!--para heredar de base-->
@section('title', 'VISTA') <!--nombre pagina, nombre de seccion-->
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 ml-5">
                <br>
                <h1 class="text-center"><i class="fas fa-user-graduate"> </i> ESTUDIANETE</h1>
                <br>
                <!--Mensaje de Eliminado-->
                @if(session('Eliminado'))
                    <div class="alert alert-danger text-dark">
                        {{session('Eliminado')}}
                    </div>
                @endif

                <!--Mensaje de Modificado-->
                @if(session('Editado'))
                    <div class="alert alert-primary">
                        {{session('Editado')}}
                    </div>
                @endif

                <!--Mensaje de Guardado-->
                @if(session('Guardado'))
                    <div class="alert alert-success">
                        {{session('Guardado')}}
                    </div>
                @endif

                <!--boton de agregar clientes-->
                <a class="btn btn-success" href="{{route('createEstudiante')}}" style="background-color: #3DA025;border-radius: 30%">
                    <i style="color: white"> <i class="fas fa-user-plus"></i></i>
                </a>
                <br>
                <br>
                <table class="table table-light table-bordered table-hover text-center">
                    <thead style="color: #8B716C; border-color: #8B716C">
                    <tr>
                        <th style="background-color: #a4c2f4">Carnet</th>
                        <th style="background-color: #a4c2f4">Nombre</th>
                        <th style="background-color: #a4c2f4">Apellido</th>
                        <th style="background-color: #a4c2f4">Carrera</th>
                        <th style="background-color: #a4c2f4">Semestre</th>
                        <th style="background-color: #a4c2f4">Acciones</th>
                    </tr>
                    </thead>

                    <tbody style="border-color: #8B716C">
                    @foreach($estudiante as $studes)
                        <tr>
                            <td>{{$studes->carnet}}</td>
                            <td>{{$studes->nombre}}</td>
                            <td>{{$studes->apellido}}</td>
                            <td>{{$studes->carrrera}}</td>
                            <td>{{$studes->semestre}}</td>
                            <td>
                                <div class="btn btn-group">
                                    <a href="{{route('editStuden', $studes->carnet)}}" class="btn btn-outline-info mb-2 me-2 m-1" style="border-radius: 50%">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{route('deleteStuden',$studes->carnet)}}" method="POST">
                                        @csrf @method('DELETE')

                                        <button type="submit" onclick="return confirm('¿Segurro de borrar?')" class="btn btn-outline-danger mb-2 mr-2 m-1">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
                <!-- Paginacion -->

            </div>
        </div>
    </div>
@endsection
