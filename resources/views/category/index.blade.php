@extends('layouts.principal')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Categorias
                </h3>
            </div>
            <div class="title_right">
                <div class="col-md-3 col-sm-3 form-group pull-right top_search">
                    <span>
                        <a href="{{ route('category.create') }}">
                            <button class="btn btn-success" type="button">
                                <i class="fa fa-plus">
                                </i>
                                Nuevo Categoria
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
                            Listado de Categorias
                        </h2>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <form action="{{ route('search.category') }}" method="POST">
                                @csrf
                                <div class="input-group">
                                <input class="form-control" placeholder="Ingresar el nombre de categoria" type="text" name="buscar" value="{{ !empty($search)?$search:"" }}">
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
                                            Grupo
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
                                    @foreach($categories as $category)
                                    <tr>
                                        <th scope="row">
                                            {{ $category->category_id }}
                                        </th>
                                        <td>
                                            {{ $category->name }}
                                        </td>
                                        <td>
                                            {{ $category->description }}
                                        </td>
                                        <td>
                                            {{ $category->group }}
                                        </td>
                                        <td>
                                            {{ $category->state }}
                                        </td>
                                        <td class="text-center">
                                            <spam class="label label-{{ $category->state?'success':'danger' }}" >
                                                {{ $category->state?'Activo':'Inactivo' }}
                                            </spam>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('category.edit', $category->category_id) }}">
                                                <button class="btn btn-primary btn-xs" type="button">
                                                    <i class="fa fa-edit">
                                                    </i>
                                                </button>
                                            </a>
                                            <a href="{{ route('category.state',$category->category_id) }}" title="{{ $category->state?'Desactivar':'Activar' }}">
                                                <button class="btn btn-{{ $category->state?'danger':'success' }} btn-xs modalState" type="submit">
                                                    <i class="fa fa-{{ $category->state?'times':'check' }}">
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
                                {{ $categories->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection