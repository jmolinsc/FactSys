@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cliente</h1>
@stop

@section('content')
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')
            <form method="POST" action="{{ route('clientes.update', $cliente->id) }}" role="form"
                enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf
                <div class="card card-default">
                    <div class="card-header">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save">
                            </i></button>
                        <a href="/clientes" class="btn btn-warning"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="card-body">


                        @include('cliente.form')


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
