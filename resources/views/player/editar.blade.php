@extends('layouts.principal')
@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        <div class="title_left">
            <h3>Jugadores</h3>
        </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                <div class="x_title">
                    <h2>Editar Jugador</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('player.update', $player->player_id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <div class="col-md-4 col-sm-12 col-xs-12  form-group">
                            <label>Nombre</label>
                            <input type="text" placeholder="Introduza su Nombre" class="form-control" id="name" name="name" required value="{{ $player->name }}">
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12  form-group">
                            <label>Apellido Paterno</label>
                            <input type="text" placeholder="Introduzca Ap. Parterno" class="form-control" name="first_name" required value="{{ $player->first_name }}">
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                            <label>Apellido Materno</label>
                        <input type="text" placeholder="Introduzca Ap. Materno" class="form-control" name="last_name" required value="{{$player->last_name}}">
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                            <label>
                                Cedula de Identidad
                            </label>
                        <input class="form-control" name="ci" placeholder="Introduzca Cedula de Identidad" type="number" required value="{{ $player->ci }}">
                            </input>
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                            <label>
                                Correo Electronico
                            </label>
                            <input class="form-control" name="email" placeholder="Introduzca Email" type="text" required value="{{ $player->email }}">
                            </input>
                            @if($errors->has('email'))
                                <div class="text-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                            <label> Genero </label> <br>
                            <div class="btn-group" data-toggle="buttons" id="gender">
                                <div class="radio">
                                    <label><input name="gender" type="radio" value="1" {{ $player->gender==1?'checked':'' }} > Masculino </input></label>
                                    <label><input name="gender" type="radio" value="0" {{ $player->gender==0?'checked':'' }}> Femenino </input></label>
                                </div>
                            </div> <br>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                            <label> Fecha de Nacimiento </label>
                            <input class="form-control" id="date-name" name="date_birth" type="date" required value="{{ $date }}"></input>
                        </div>


                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                            <label> Subir Fotografia </label>
                            <input class="form-control-file" name="photo" type="file" value="{{ $photo }}"></input>
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                            <label> Equipos </label>
                            <select class="form-control department" name="team" id="team">
                                <option value=""> Seleccione Equipo </option>
                                @foreach ($teams as $team)
                                <option value="{{ $team->team_id }}" {{ $team->team_id==$player->team['team_id']?'selected':'' }}>
                                    {{ $team->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                        <a href="{{ route('player.index') }}">
                            <button class="btn btn-default" type="button">Cancelar</button>
                        </a>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
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
