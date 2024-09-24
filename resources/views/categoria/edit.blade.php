@extends('adminlte::page')

@section('title', 'Categoria')

@section('content_header')
    <h1>Categoria</h1>
@stop

@section('content')
    <div class="">
        <div class="col-md-12">
            @includeif('partials.errors')
            <form method="POST" action="{{ route('categorias.update', $categoria->id) }}" role="form"
                enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf
                <div class="card card-default">
                    <div class="card-header">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save">
                            </i></button>
                        <a href="/categorias" class="btn btn-warning"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="card-body">
                        @include('categoria.form')
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
