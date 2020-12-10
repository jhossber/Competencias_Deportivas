@extends('layouts.principal')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Rol de Partidos
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
                            Nuevo Partido
                        </h2>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="x_content">
                        <form action="{{ route('fixture.store') }}" class="form-horizontal form-label-left" data-parsley-validate="" id="demo-form2" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Hora de Juego
                                            </label>
                                            <input class="form-control" id="name" name="date_time" type="time">
                                            </input>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Fecha de Juego
                                            </label>
                                            <input class="form-control" name="date_game" type="date">
                                            </input>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Equipo Local
                                            </label>
                                            <select class="form-control" name="team_one">
                                                <option>Seleccionar Equipo</option>
                                                @foreach($teams as $team)
                                                <option value="{{$team->team_id}}" {{old('team_one')==$team->team_id?'selected':''}}>
                                                    {{$team->name}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Equipo Visitante
                                            </label>
                                            <select class="form-control" name="team_two">
                                                <option>Seleccionar Equipo</option>
                                                @foreach($teams as $team)
                                                <option value="{{$team->team_id}}" {{old('team_two')==$team->team_id?'selected':''}}>
                                                    {{$team->name}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Cancha
                                            </label>
                                            <select class="form-control" name="place">
                                                <option>Seleccionar Cancha</option>
                                                @foreach($places as $place)
                                                <option value="{{$place->place_id}}" {{old('place')==$place->place_id?'selected':''}}>
                                                    {{$place->name}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                            </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 text-right" style="padding-top: 15px;">
                                <div class="item form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12 offset-md-3">
                                        <div class="item form-group">
                                            <a href="{{ route('fixture.index') }}">
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
