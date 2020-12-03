@extends('layouts.principal')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Roles y Permisos
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
                            Nuevo Rol
                        </h2>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="x_content">
                            <form action="{{ route('role.store') }}" class="form-horizontal form-label-left" data-parsley-validate="" id="demo-form2" method="POST">
                                    @csrf
                            <div class="item col-md-12 col-sm-12 col-xs-12 form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nombre<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9">
                                    <input type="text" id="name" name="name" required="required" class="form-control " placeholder="Ingrese Nombre">
                                </div>
                            </div>
                            <div class="x_title">
                                    <h2>
                                        Lista de Permisos
                                    </h2>
                                    <div class="clearfix">
                                    </div>
                                </div>
                      <div class="form-group">
                        <div class="col-md-12col-sm-12 col-xs-12">
                          <div class="">
                              @foreach ($permissions as $permission )
                              <div class="col-md-4 col-sm-4 col-xs-12">
                              <label>
                              <input type="checkbox" class="js-switch" value="{{ $permission->id}}" name="permission[]"/> {{ $permission->name }}
                              </label>
                            </div>
                              @endforeach

                          </div>

                        </div>
                      </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 text-right" style="padding-top: 15px;">
                                <div class="item form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12 offset-md-3">
                                        <div class="item form-group">
                                            <a href="{{ route('role.index') }}">
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
