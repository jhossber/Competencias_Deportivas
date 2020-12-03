@extends('layouts.principal')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Rol
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
                            Modificar Rol
                        </h2>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="x_content">
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('role.update', $role->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                            <div class="item col-md-12 col-sm-12 col-xs-12 form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nombre <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9">
                                    <input type="text" id="first-name" name="name" required="required" class="form-control " required value="{{ $role->name }}">
                                </div>
                            </div>
                            <br>
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
                              <input type="checkbox" class="js-switch" value="{{ $permission->id}}" name="permissions[]" {{ array_search($permission->id, $array, false)?"checked":"" }} /> {{ $permission->name }}
                              {{-- <input type="checkbox" class="js-switch" value="{{ $grant->grant_id}}" name="grants[]" {{ array_search($grant->grant_id, $array, false)?"checked":"" }} /> {{ $grant->name }} --}}
                            </label>
                            </div>
                              @endforeach
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
