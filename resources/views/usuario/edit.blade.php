@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar usuario</h1>
@stop

@section('content')
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')
            <form method="POST" action="{{ route('usuarios.update', $usuario->id) }}" role="form"
                enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf
                <div class="card card-default">
                    <div class="card-header">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save">
                            </i></button>
                        <a href="/usuarios" class="btn btn-warning"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="card-body">
                        @include('usuario.form')
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
