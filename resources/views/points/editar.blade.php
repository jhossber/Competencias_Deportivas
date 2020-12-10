@extends('layouts.principal')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Puntos
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
                            Editar Puntuacion
                        </h2>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="x_content">
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('point.update', $point->point_id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Ganados
                                            </label>
                                            <input class="form-control" id="name" name="win" placeholder="Introduzca la puntuacion" type="number" required value="{{ $point->win}}">
                                            </input>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Perdidos
                                            </label>
                                            <input class="form-control" name="lose" placeholder="Introduzca puntos perdidos" type="number" required value="{{ $point->lose }}">
                                            </input>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Walkover
                                            </label>
                                            <input class="form-control" name="walkover" placeholder="Introduzca puntos de walkover" type="number" required value="{{ $point->walkover }}">
                                            </input>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Equipos
                                            </label>
                                            <select class="form-control" name="team">
                                                <option>Seleccionar Equipo</option>
                                                @foreach($teams as $team)
                                                <option value="{{$team->team_id}}" {{ $team->team_id==$point->team['team_id']?'selected':''}}>
                                                    {{$team->name}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        </div>
                            </div>

                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 text-right" style="padding-top: 15px;">
                                <div class="item form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12 offset-md-3">
                                        <div class="item form-group">
                                            <a href="{{ route('point.index') }}">
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