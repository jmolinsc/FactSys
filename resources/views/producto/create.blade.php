@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Producto</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')
            <form method="POST" action="{{ route('productos.store') }}" role="form" enctype="multipart/form-data"
                autocomplete="off">
                @csrf
                <div class="card card-default">
                    <div class="card-header">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save">
                            </i></button>
                        <a href="/productos" class="btn btn-warning"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="card-body">
                        @include('producto.form')
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
