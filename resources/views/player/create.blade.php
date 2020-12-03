@extends('layouts.principal')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Jugadores
                </h3>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>
                            Nuevo Jugador
                        </h2>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="x_content">
                        <form action="{{ route('player.store') }}" class="form-horizontal form-label-left" data-parsley-validate="" id="demo-form2" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Nombre
                                            </label>
                                            <input class="form-control" id="name" name="name" placeholder="Introduza su Nombre" type="text">
                                            </input>

                                            @if($errors->has('name'))
                                                <div class="text-danger">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Apellido Paterno
                                            </label>
                                            <input class="form-control" name="first_name" placeholder="Introduzca Ap. Parterno" type="text">
                                            </input>
                                            @if($errors->has('first_name'))
                                                <div class="text-danger">{{ $errors->first('first_name') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Apellido Materno
                                            </label>
                                            <input class="form-control" name="last_name" placeholder="Introduzca Ap. Materno" type="text">
                                            </input>
                                            @if($errors->has('last_name'))
                                                <div class="text-danger">{{ $errors->first('last_name') }}</div>
                                            @endif
                                        </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Cedula de Identidad
                                            </label>
                                            <input class="form-control" name="ci" placeholder="Introduzca Cedula de Identidad" type="number">
                                            </input>
                                        </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Correo Electronico
                                            </label>
                                            <input class="form-control" name="email" placeholder="Introduzca Email" type="text">
                                            </input>
                                            @if($errors->has('email'))
                                                <div class="text-danger">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label> Genero </label> <br>
                                            <div class="btn-group" data-toggle="buttons" id="gender">
                                                <div class="radio">
                                                    <label>
                                                        <input checked="" name="gender" type="radio" value="1"> Masculino </input>
                                                    </label>
                                                    <label>
                                                        <input name="gender" type="radio" value="0"> Femenino </input>
                                                    </label>
                                                </div>
                                            </div> <br>
                                        </div>

                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">


                                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                    <label> Fecha de Nacimiento </label>
                                    <input class="form-control" id="date-name" name="date_birth" type="date" value="{{old('date_birth')}}"></input>
                                    @if($errors->has('date_happy'))
                                        <div class="text-danger">{{ $errors->first('date_birth') }}</div>
                                    @endif
                                </div>


                                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                    <label> Subir Fotografia </label>
                                    <input class="form-control-file" name="photo" type="file"></input>
                                </div>

                                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                    <label> Equipos </label>
                                    <select class="form-control department" name="team" id="department">
                                        <option value=""> Seleccione Equipo </option>
                                        @foreach ($teams as $team)
                                        <option value="{{ $team->team_id }}" {{ old('team')==$team->team_id?'selected':'' }}>
                                            {{ $team->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 text-right" style="padding-top: 15px;">
                                <div class="item form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12 offset-md-3">
                                        <div class="item form-group">
                                            <a href="{{ route('player.index') }}">
                                                <button class="btn btn-dafault" type="button">
                                                    Cancelar
                                                </button>
                                            </a>
                                            <button class="btn btn-primary" type="submit">
                                                Guardar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
