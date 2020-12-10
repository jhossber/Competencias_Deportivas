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
        </div>
        <div class="clearfix">
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>
                            Editar Cancha
                        </h2>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="x_content">
                         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('fixture.update', $place->place_id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Nombre
                                            </label>
                                            <input class="form-control" id="name" name="name" placeholder="Introduza su Nombre" type="text"required value="{{ $place->name }}
                                            ">
                                            </input>

                                            @if($errors->has('name'))
                                                <div class="text-danger">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Descripcion
                                            </label>
                                            <input class="form-control" name="description" placeholder="Introduzca una descripcion" type="text" required value="{{ $place->description }}
                                                ">
                                            </input>
                                            @if($errors->has('first_name'))
                                                <div class="text-danger">{{ $errors->first('first_name') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Localidad
                                            </label>
                                            <input class="form-control" name="location" placeholder="Introduzca una localidad" type="text" required value="{{ $place->location }}
                                                ">
                                            </input>
                                            @if($errors->has('last_name'))
                                                <div class="text-danger">{{ $errors->first('last_name') }}</div>
                                            @endif
                                        </div>
                            </div>

                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 text-right" style="padding-top: 15px;">
                                <div class="item form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12 offset-md-3">
                                        <div class="item form-group">
                                            <a href="{{ route('place.index') }}">
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
