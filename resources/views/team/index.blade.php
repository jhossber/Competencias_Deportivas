@extends('layouts.principal')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Equipos
                </h3>
            </div>
            <div class="title_right">
                <div class="col-md-3 col-sm-3 form-group pull-right top_search">
                    <span>
                        <a href="{{ route('team.create') }}">
                            <button class="btn btn-success" type="button">
                                <i class="fa fa-plus">
                                </i>
                                Nuevo Equipo
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
                            Listado de Todos los Equipos
                        </h2>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <form action="{{ route('search.team') }}" method="POST">
                                @csrf
                                <div class="input-group">
                                <input class="form-control" placeholder="Ingresar el nombre de Equipo" type="text" name="buscar" value="{{ !empty($search)?$search:"" }}">
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
                                            Nombre
                                        </th>
                                        <th>
                                            Categoria
                                        </th>
                                        <th>
                                            Descripcion
                                        </th>
                                        <th class="text-center">
                                            Estado
                                        </th>
                                        <th class="text-center">
                                            Acciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($teams as $team)
                                    <tr>
                                        <th scope="row">
                                            {{ $team->team_id }}
                                        </th>
                                        <td>
                                            {{ $team->name }}
                                        </td>
                                        <td>
                                            {{ $team->namecategory }}
                                        </td>
                                        <td>
                                            {{ $team->description }}
                                        </td>
                                        <td class="text-center">
                                            <spam class="label label-{{ $team->state?'success':'danger' }}" >
                                                {{ $team->state?'Activo':'Inactivo' }}
                                            </spam>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('team.edit', $team->team_id) }}">
                                                <button class="btn btn-primary btn-xs" type="button">
                                                    <i class="fa fa-edit">
                                                    </i>
                                                </button>
                                            </a>
                                            {{-- @can('player.state') --}}
                                            <a href="{{ route('team.state',$team->team_id) }}" title="{{ $team->state?'Desactivar':'Activar' }}">
                                                <button class="btn btn-{{ $team->state?'danger':'success' }} btn-xs modalState" type="submit">
                                                    <i class="fa fa-{{ $team->state?'times':'check' }}">
                                                    </i>
                                                </button>
                                            </a>
                                            {{-- @else
                                                No puede Borrar
                                            @endcan --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                {{ $teams->links() }}
                            </div>





                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
