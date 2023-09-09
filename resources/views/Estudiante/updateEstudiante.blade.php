@extends('layauts.base') <!--para heredar de base-->
@section('title', 'ACTUALIZAR') <!--nombre pagina, nombre de seccion-->
@section('content')
    <div class="container">
        <div class=" row justify-content-center">
            <div class="col-md-5 mt-5 ml-5">
                <!-- Validacion de Errores -->
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li> {{ $error}} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    <form action=" {{ route('updateStuden', $estudiante->carnet) }}" method="POST">
                        @csrf @method("PATCH")

                        <div class=" card-header text-center" style="background-color: #005555">
                            <h2 style="color: #FEFBE7"><i class="fas fa-user-edit"></i> Modificar Estudiante</h2>
                        </div>

                        <div class="card-body">
                            <div class="col-lg">
                                <input type="text" name="nombre" class="form-control"
                                       value="{{$estudiante->nombre}}">
                            </div>
                            <br>
                            <div class="col-lg">
                                <input type="text" name="apellido" class="form-control"
                                       value="{{$estudiante->apellido}}">
                            </div>
                            <br>
                            <div class="col-lg">
                                <input type="text" name="carrrera" class="form-control"
                                       value="{{$estudiante->carrrera}}" >
                            </div>
                            <br>
                            <div class="col-lg">
                                <input type="text" name="semestre" class="form-control"
                                       value="{{$estudiante->semestre}}">
                            </div>
                            <br>
                            <div class="row">
                                <div class="row form-group">
                                    <div class="col-md-5 offset-1">
                                        <button id="Guardado" type="submit" class="btn btn-outline-info col-md-12" onclick="save()">
                                            <i class="fas fa-tag"></i> Editar
                                        </button>
                                    </div>
                                    <div class="col-md-5">
                                        <a class="btn btn-outline-danger btn-xs col-md-12" href="{{ url('/') }}">
                                            <i class="fas fa-times-circle"></i> Cancelar
                                        </a>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
