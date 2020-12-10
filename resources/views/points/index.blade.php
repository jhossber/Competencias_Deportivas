@extends('layouts.principal')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Puntuaciones
                </h3>
            </div>
            <div class="title_right">
                <div class="col-md-3 col-sm-3 form-group pull-right top_search">
                    <span>
                        <a href="{{ route('point.create') }}">
                            <button class="btn btn-success" type="button">
                                <i class="fa fa-plus">
                                </i>
                                Nueva Puntuacion
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
                            Listado de Puntos
                        </h2>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <form action="{{ route('search.point') }}" method="POST">
                                @csrf
                                <div class="input-group">
                                <input class="form-control" placeholder="Ingresar del equipo" type="text" name="buscar" value="{{ !empty($search)?$search:"" }}">
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
                                            Equipo
                                        </th>
                                        <th>
                                            Ganador
                                        </th>
                                        <th>
                                            Perdedor
                                        </th>
                                        <th>
                                            Walkover
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
                                    @foreach($points as $point)
                                    <tr>
                                        <th scope="row">
                                            {{ $point->point_id }}
                                        </th>
                                        <td>
                                            {{ $point->win }}
                                        </td>
                                        <td>
                                            {{ $point->name }}
                                        </td>
                                        <td>
                                            {{ $point->lose }}
                                        </td>
                                        <td>
                                            {{ $point->walkover }}
                                        </td>
                                        <td>
                                            {{ $point->state }}
                                        </td>
                                        <td class="text-center">
                                            <spam class="label label-{{ $point->state?'success':'danger' }}" >
                                                {{ $point->state?'Activo':'Inactivo' }}
                                            </spam>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('point.edit', $point->point_id) }}">
                                                <button class="btn btn-primary btn-xs" type="button">
                                                    <i class="fa fa-edit">
                                                    </i>
                                                </button>
                                            </a>
                                            <a href="{{ route('point.state',$point->point_id) }}" title="{{ $point->state?'Desactivar':'Activar' }}">
                                                <button class="btn btn-{{ $point->state?'danger':'success' }} btn-xs modalState" type="submit">
                                                    <i class="fa fa-{{ $point->state?'times':'check' }}">
                                                    </i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                        </div>
                                      </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                {{ $points->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection