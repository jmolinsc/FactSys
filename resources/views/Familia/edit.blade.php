@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="">
        <div class="col-md-12">
            @includeif('partials.errors')
            <form method="POST" action="{{ route('familias.update', $familia->id) }}" role="form"
                enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf
                <div class="card card-default">
                    <div class="card-header">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save">
                            </i></button>
                        <a href="/familias" class="btn btn-warning"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="card-body">
                        @include('familia.form')
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
