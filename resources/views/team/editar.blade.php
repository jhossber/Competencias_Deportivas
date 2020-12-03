@extends('layouts.principal')
@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        <div class="title_left">
            <h3>Equipos</h3>
        </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                <div class="x_title">
                    <h2>Editar Equipo</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('team.update', $team->team_id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <div class="col-md-4 col-sm-12 col-xs-12  form-group">
                            <label>Nombre</label>
                            <input type="text" placeholder="Introduza su Nombre" class="form-control" id="name" name="name" required value="{{ $team->name }}">
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12  form-group">
                            <label>Descripcion</label>
                            <input type="text" placeholder="Introduzca Ap. Parterno" class="form-control" name="description" required value="{{ $team->description }}">
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                            <label> Categorias </label>
                            <select class="form-control department" name="category" id="team">
                                <option value=""> Seleccione Categoria </option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->category_id }}" {{ $category->category_id==$team->category['category_id']?'selected':'' }}>
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                        <a href="{{ route('team.index') }}">
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
