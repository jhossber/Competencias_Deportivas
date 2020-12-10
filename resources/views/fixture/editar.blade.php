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
                            Editar Partido
                        </h2>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="x_content">
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('fixture.update', $fixture->place_team_id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Hora de Juego
                                            </label>
                                            <input class="form-control" id="name" name="date_time" type="time" required value="{{ $fixture->date_time}}">
                                            </input>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Fecha de Juego
                                            </label>
                                            <input class="form-control" name="date_game" type="date" required value="{{ $fixture->date_game }}">
                                            </input>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Equipos Local
                                            </label>
                                            <select class="form-control" name="team_one">
                                                <option>Seleccionar Equipo</option>
                                                {{-- @foreach($teams as $team)
                                                {{-- <option value="{{$team->team_id}}" {{ $team->team_id==$fixture->team['team_id']?'selected':''}}>
                                                    {{$team->name}}
                                                </option> --}}
                                                {{-- @endforeach --}} --}}
                                            </select>
                                        </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Equipos Visitante
                                            </label>
                                            <select class="form-control" name="team_two">
                                                <option>Seleccionar Equipo</option>
                                                {{-- @foreach($teams as $team)
                                                <option value="{{$team->team_id}}" {{ $team->team_id==$fixture->teams['team_id']?'selected':''}}>
                                                    {{$team->name}}
                                                </option>
                                                @endforeach --}}
                                            </select>
                                        </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Cancha
                                            </label>
                                            <select class="form-control" name="place">
                                                <option>Seleccionar Cacnha</option>
                                                {{-- @foreach($places as $place)
                                                <option value="{{$place->place_id}}" {{ $place->place_id==$fixture->place['place_id']?'selected':''}}>
                                                    {{$place->name}}
                                                </option>
                                                @endforeach --}}
                                            </select>
                                        </div>

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
                                                Actualizar
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
