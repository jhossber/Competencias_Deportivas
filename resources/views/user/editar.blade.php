@extends('layouts.principal')
@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        <div class="title_left">
            <h3>Administrador</h3>
        </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                <div class="x_title">
                    <h2>Editar Administrador</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <div class="col-md-4 col-sm-12 col-xs-12  form-group">
                            <label>Nombre</label>
                            <input type="text" placeholder="Introduza su Nombre" class="form-control" id="name" name="name" required value="{{ $user->name }}">
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12  form-group">
                            <label>Apellido Paterno</label>
                            <input type="text" placeholder="Introduzca Ap. Parterno" class="form-control" name="first_name" required value="{{ $user->first_name }}">
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                            <label>Apellido Materno</label>
                        <input type="text" placeholder="Introduzca Ap. Materno" class="form-control" name="last_name" required value="{{$user->last_name}}">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">

                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                            <label>Correo Electronico</label>
                            <input type="text" placeholder="Introduzca Email" class="form-control" name="email" value="{{$user->email}}">
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                            <label> Roles </label>
                            <select class="form-control" name="role">
                                <option value=""> Seleccione Rol </option>
                                @foreach ($roles as $rol)
                                {{-- <option value="{{ $rol->id }}" {{ $rol->id==$rol->users['role_id']?'selected':'' }}>
                                    {{ $rol->name }}
                                </option> --}}
                                <option value="{{ $rol->id }}" {{ $rol->id==$role_user ?'selected':'' }}>
                                    {{ $rol->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                        <a href="{{ route('user.index') }}">
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
