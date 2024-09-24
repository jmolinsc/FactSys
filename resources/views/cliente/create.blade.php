@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')
            <form method="POST" action="{{ route('clientes.store') }}" role="form">
                @csrf
                <div class="card card-default">
                    <div class="card-header">
                        {{-- <span class="card-title">{{ __('Create') }} Clientes</span> --}}
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
