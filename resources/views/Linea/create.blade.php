@extends('adminlte::page')

@section('title', 'Linea')

@section('content_header')
    <h1>Linea</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')
            <form method="POST" action="{{ route('lineas.store') }}" role="form">
                @csrf
                <div class="card card-default">
                    <div class="card-header">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save">
                            </i></button>
                        <a href="/lineas" class="btn btn-warning"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="card-body">
                        @include('linea.form')
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
