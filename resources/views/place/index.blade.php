@extends('layouts.principal')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Canchas
                </h3>
            </div>
            <div class="title_right">
                <div class="col-md-3 col-sm-3 form-group pull-right top_search">
                    <span>
                        <a href="{{ route('place.create') }}">
                            <button class="btn btn-success" type="button">
                                <i class="fa fa-plus">
                                </i>
                                Nueva Cancha
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
                            Listado de Canchas
                        </h2>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <form action="{{ route('search.place') }}" method="POST">
                                @csrf
                                <div class="input-group">
                                <input class="form-control" placeholder="Ingresar el nombre de cancha" type="text" name="buscar" value="{{ !empty($search)?$search:"" }}">
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
                                            Descripcion
                                        </th>
                                        <th>
                                            Localidad○
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
                                    @foreach($places as $place)
                                    <tr>
                                        <th scope="row">
                                            {{ $place->place_id }}
                                        </th>
                                        <td>
                                            {{ $place->name }}
                                        </td>
                                        <td>
                                            {{ $place->description }}
                                        </td>
                                        <td>
                                            {{ $place->location }}
                                        </td>
                                        <td>
                                            {{ $place->state }}
                                        </td>
                                        <td class="text-center">
                                            <spam class="label label-{{ $place->state?'success':'danger' }}" >
                                                {{ $place->state?'Activo':'Inactivo' }}
                                            </spam>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('place.edit', $place->place_id) }}">
                                                <button class="btn btn-primary btn-xs" type="button">
                                                    <i class="fa fa-edit">
                                                    </i>
                                                </button>
                                            </a>
                                            <a href="{{ route('place.state',$place->place_id) }}" title="{{ $place->state?'Desactivar':'Activar' }}">
                                                <button class="btn btn-{{ $place->state?'danger':'success' }} btn-xs modalState" type="submit">
                                                    <i class="fa fa-{{ $place->state?'times':'check' }}">
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
                                {{ $places->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
