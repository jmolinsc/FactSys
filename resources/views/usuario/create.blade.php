@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nuevo usuario</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')
            <form method="POST" action="{{ route('usuarios.store') }}" role="form">
                @csrf
                <div class="card card-default">
                    <div class="card-header">
                        <div class="card-header">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save">
                                </i></button>
                            <a href="/usuarios" class="btn btn-warning"><i class="fas fa-times"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('usuario.form')
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
