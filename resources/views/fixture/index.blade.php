@extends('layouts.principal')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Partidos
                </h3>
            </div>
            <div class="title_right">
                <div class="col-md-3 col-sm-3 form-group pull-right top_search">
                    <span>
                        <a href="{{ route('fixture.create') }}">
                            <button class="btn btn-success" type="button">
                                <i class="fa fa-plus">
                                </i>
                                Nueva Fecha
                            </button>
                        </a>
                    </span>
                </div>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="row" style="display: block;">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel table-responsive">
                    <div class="x_title">
                        <h2>
                            Listado de Partidos
                        </h2>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <form action="{{ route('search.user') }}" method="POST">
                                @csrf
                                <div class="input-group">
                                <input class="form-control" placeholder="Ingresar su primer Apellido" type="text" name="buscar" value="{{ !empty($search)?$search:"" }}">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" style="color:white;" type="submit">
                                                    Buscar
                                                </button>
                                            </span>
                                        </input>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            Local
                                        </th>
                                        <th>
                                            Visitante
                                        </th>
                                        <th>
                                            Hora de Juego
                                        </th>
                                        <th>
                                            Dia de Juego
                                        </th>
                                        <th>
                                            Cancha
                                        </th>
                                        <th class="text-center">
                                            Acciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($fixtures as $fixture)
                                    <tr>
                                        <th scope="row">
                                            {{ $fixture->place_team_id }}
                                        </th>
                                        {{-- @foreach ($teams as $team ) --}}
                                        <td>
                                            {{ $fixture->team_one }}
                                            {{-- {{ $fixture->team_one == $teams_id ? $team->name : 'a' }} --}}
                                        </td>
                                        <td>
                                            {{ $fixture->team_two }}
                                            {{-- {{ $fixture->team_two == $team->team_id ? $team->name : 'a' }} --}}
                                        </td>

                                        {{-- @endforeach --}}
                                        <td>
                                            {{ $fixture->date_time }}
                                        </td>
                                        <td>
                                            {{ $fixture->date_game }}
                                        </td>
                                        <td>
                                            {{ $fixture->place_id }}
                                        </td>

                                        <td class="text-center">
                                            <a href="{{ route('fixture.edit', $fixture->place_team_id) }}">
                                                <button class="btn btn-primary btn-xs" type="button">
                                                    <i class="fa fa-edit">
                                                    </i>
                                                </button>
                                            </a>
                                            <a href="{{ route('fixture.state',$fixture->place_team_id) }}">
                                                <button class="btn btn-danger btn-xs modalState" type="submit">
                                                    <i class="fa fa-times check">
                                                    </i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                {{-- {{ $fixtures->links() }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
