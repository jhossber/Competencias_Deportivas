@extends('layouts.principal')
@section('content')

<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Roles</h3>
        </div>

        {{-- <div class="title_right">
          <div class="col-md-5 col-sm-5   form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Ingrese búsqueda">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Buscar</button>
              </span>
            </div>
          </div>
        </div> --}}
        <div class="title_right">
                <div class="col-md-3 col-sm-3 form-group pull-right top_search">
                        <span>
                            <a href="{{ route('role.create') }}">
                                <button class="btn btn-success" type="button">
                                    <i class="fa fa-plus">
                                    </i>
                                    Nuevo Rol
                                </button>
                            </a>
                        </span>
                    </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row" style="display: block;">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel table-responsive">
            <div class="x_title">
              <h2>Lista Roles</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Descripcion</th>
                    <th class="text-center">
                        Estado
                    </th>
                    <th class="text-center">
                        Acciones
                    </th>
                  </tr>

                </thead>
                <tbody>
                @foreach($roles as $role)
                  <tr>
                    <th scope="row">{{ $role->id }}</th>
                    <td>{{ $role->name }}</td>

                    <td class="text-center">
                        {{-- <button class="btn btn-round btn-{{ $role->state?'success':'danger' }} btn-xs" type="button">
                            {{ $role->state?'Activo':'Inactivo' }}
                        </button> Stado --}}
                    </td>
                    <td class="text-center">
                        <a href="{{ route('role.edit', $role->id) }}">
                            <button class="btn btn-primary btn-xs" type="button">
                                <i class="fa fa-edit"></i>
                            </button>
                        </a>
                        {{-- <a href="{{ route('role.state',$role->role_id) }}" title="{{ $role->state?'Desactivar':'Activar' }}">
                            <button class="btn btn-{{ $role->state?'danger':'success' }} btn-xs modalState" type="submit">
                                <i class="fa fa-{{ $role->state?'times':'check' }}"></i>
                            </button>
                        </a>--}} Eliminar
                    </td>

                  </tr>
                @endforeach
                </tbody>
              </table>
              <div class="text-center">{{ $roles->links() }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
