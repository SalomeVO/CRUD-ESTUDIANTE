@extends('layauts.base') <!--para heredar de base-->
@section('title', 'FORMULARIO') <!--nombre pagina, nombre de seccion-->
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
                    <form action=" {{ route('estudiante.saveEstudiante') }}" method="POST">
                        @csrf

                        <div class=" card-header text-center" style="background-color: #005555">
                            <h2 style="color: #FEFBE7"><i class="fas fa-user-plus"> </i> Registrar Estudiante</h2>
                        </div>

                        <div class="card-body">
                            <div class="col-lg">
                                <input type="text" class="form-control" value="{{old('carnet')}}"
                                       placeholder="0000000000" name="carnet">
                            </div>
                            <br>
                            <div class="col-lg">
                                <input type="text" name="nombre" class="form-control"
                                       value="{{old('nombre')}}" placeholder="Nombre">
                            </div>
                            <br>
                            <div class="col-lg">
                                <input type="text" name="apellido" class="form-control"
                                       value="{{old('apellido')}}" placeholder="Apellido">
                            </div>
                            <br>
                            <div class="col-lg">
                                <input type="text" name="carrrera" class="form-control"
                                       value="{{old('carrrera')}}" placeholder="Carrera">
                            </div>
                            <br>
                            <div class="col-lg">
                                <input type="text" name="semestre" class="form-control"
                                       value="{{old('semestre')}}" placeholder="Semestre">
                            </div>
                            <!--este solo se mostrara en la api-->
                            <div class="col-lg">
                                <input type="hidden" name="control" value="form">
                            </div>
                            <br>
                            <div class="row">
                                <div class="row form-group">
                                    <div class="col-md-5 offset-1">
                                        <button id="Guardado" type="submit" class="btn btn-outline-info col-md-12" onclick="save()">
                                            <i class="fas fa-save"></i> Guardar
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
