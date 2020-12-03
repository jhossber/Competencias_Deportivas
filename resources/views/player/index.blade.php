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
            <div class="title_right">
                <div class="col-md-3 col-sm-3 form-group pull-right top_search">
                    <span>
                        <a href="{{ route('player.create') }}">
                            <button class="btn btn-success" type="button">
                                <i class="fa fa-plus">
                                </i>
                                Nuevo Jugador
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
                            Listado de Jugadores
                        </h2>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <form action="{{ route('search.player') }}" method="POST">
                                @csrf
                                <div class="input-group">
                                <input class="form-control" placeholder="Ingresar su cedula de Identidad" type="text" name="buscar" value="{{ !empty($search)?$search:"" }}">
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
                                            Cedula de Identidad
                                        </th>
                                        <th>
                                            Nombre
                                        </th>
                                        <th>
                                            Ap. Paterno
                                        </th>
                                        <th>
                                            Ap. Materno
                                        </th>
                                        <th>
                                            Fecha de Nacimiento
                                        </th>
                                        <th>
                                            Fotografia
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
                                    @foreach($players as $player)
                                    <tr>
                                        <th scope="row">
                                            {{ $player->id }}
                                        </th>
                                        <td>
                                            {{ $player->ci }}
                                        </td>
                                        <td>
                                            {{ $player->name }}
                                        </td>
                                        <td>
                                            {{ $player->first_name }}
                                        </td>
                                        <td>
                                            {{ $player->last_name }}
                                        </td>
                                        <td>
                                            {{ $player->date_birth }}
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                <img src="{{ asset('/players_photo/'.$player->photo) }}" alt="Actualize imagen" class="img-thumbnail" width="70" height="70">
                              </button>

                                        </td>
                                        <td class="text-center">
                                            <spam class="label label-{{ $player->state?'success':'danger' }}" >
                                                {{ $player->state?'Activo':'Inactivo' }}
                                            </spam>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('player.edit', $player->player_id) }}">
                                                <button class="btn btn-primary btn-xs" type="button">
                                                    <i class="fa fa-edit">
                                                    </i>
                                                </button>
                                            </a>
                                            @can('player.state')
                                            <a href="{{ route('player.state',$player->player_id) }}" title="{{ $player->state?'Desactivar':'Activar' }}">
                                                <button class="btn btn-{{ $player->state?'danger':'success' }} btn-xs modalState" type="submit">
                                                    <i class="fa fa-{{ $player->state?'times':'check' }}">
                                                    </i>
                                                </button>
                                            </a>
                                            @else
                                                No puede Borrar
                                            @endcan
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Fotografia de Jugador</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <img src="{{ asset('/players_photo/'.$player->photo) }}" alt="Actualize imagen" class="img-thumbnail" width="570" height="570">
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                {{ $players->links() }}
                            </div>





                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
