@extends('layouts.principal')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Administrador
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
                            Nuevo Administrador
                        </h2>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="x_content">
                        <form action="{{ route('user.store') }}" class="form-horizontal form-label-left" data-parsley-validate="" id="demo-form2" method="POST">
                            @csrf
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Nombre
                                            </label>
                                            <input class="form-control" id="name" name="name" placeholder="Introduza su Nombre" type="text">
                                            </input>
                                            @if($errors->has('name'))
                                                <div class="text-danger">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Apellido Paterno
                                            </label>
                                            <input class="form-control" name="first_name" placeholder="Introduzca Ap. Parterno" type="text">
                                            </input>
                                            @if($errors->has('first_name'))
                                                <div class="text-danger">{{ $errors->first('first_name') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Apellido Materno
                                            </label>
                                            <input class="form-control" name="last_name" placeholder="Introduzca Ap. Materno" type="text">
                                            </input>
                                            @if($errors->has('last_name'))
                                                <div class="text-danger">{{ $errors->first('last_name') }}</div>
                                            @endif
                                        </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                        <div class="col-md-8 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Correo Electronico
                                            </label>
                                            <input class="form-control" name="email" placeholder="Introduzca Email" type="text">
                                            </input>
                                            @if($errors->has('email'))
                                                <div class="text-danger">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label> Roles </label>
                                            <select class="form-control department" name="role" id="department">
                                                <option value=""> Seleccione Rol </option>
                                                @foreach ($roles as $rol)
                                                <option value="{{ $rol->id }}" {{ old('role')==$rol->id?'selected':'' }}>
                                                    {{ $rol->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 text-right" style="padding-top: 15px;">
                                <div class="item form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12 offset-md-3">
                                        <div class="item form-group">
                                            <a href="{{ route('user.index') }}">
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
