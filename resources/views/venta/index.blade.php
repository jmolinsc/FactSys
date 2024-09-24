@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Venta</h1>
@stop

@section('content')
    <form class="form-horizontal form">
        <div class="form-group-sm">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">

                                <span id="card_title">
                                    {{ __('Nueva venta') }}
                                </span>

                                <div class="float-right">
                                    <a href="{{ route('venta.show') }}" class="btn btn-primary btn-sm float-right"
                                        data-placement="left">
                                        {{ __('Listar ventas') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-sm-1">Mov</label>
                                <div class="col-sm-2">
                                    <div class="input-group input-group-sm">
                                        {!! Form::select(
                                            'tipo',
                                            ['Factura' => 'Factura', 'Credito Fiscal' => 'Credito Fiscal', 'Ticket' => 'Ticket'],
                                            '',
                                            [
                                                'class' => 'custom-select form-control-border',
                                                'placeholder' => 'Selecciona Tipo',
                                            ],
                                        ) !!}
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="input-group input-group-sm">
                                        {{ Form::text('nombre', '', ['class' => 'form-control form-control-border' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                                        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}

                                    </div>

                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <label class="col-sm-1">Cliente</label>
                                <div class="col-sm-2">
                                    <div class="input-group input-group-sm">
                                        {{ Form::text('Cliente', '', ['class' => 'form-control form-control-border' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                                        {!! $errors->first('Cliente', '<div class="invalid-feedback">:message</div>') !!}

                                    </div>

                                </div>
                               
                                <div class="col-sm-2">
                                    <div class="input-group input-group-sm">
                                        {{ Form::text('nombre', '', ['class' => 'form-control form-control-border' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                                        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}

                                    </div>

                                </div>
                               
                                <div class="col-sm-2">
                                    <div class="input-group input-group-sm">
                                        {{ Form::text('nombre', '', ['class' => 'form-control form-control-border' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                                        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}

                                    </div>

                                </div>
                                <label class="col-sm-1">Cliente</label>
                                <div class="col-sm-2">
                                    <div class="input-group input-group-sm">
                                        {{ Form::text('nombre', '', ['class' => 'form-control form-control-border' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                                        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}

                                    </div>

                                </div>

                            </div>



                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="buscarCliente">Buscar Cliente</label>
                                    <input id="buscarCliente" class="form-control" type="text"
                                        placeholder="Buscar Cliente">
                                    <input id="id_cliente" class="form-control" type="hidden">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="tel_cliente">Teléfono</label>
                                    <input id="tel_cliente" class="form-control" type="text" disabled>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="dir_cliente">Direccion</label>
                                    <input id="dir_cliente" class="form-control" type="text" disabled>
                                </div>
                            </div>

                            @livewire('product-list')

                            <button class="btn btn-primary fixed-button" id="btnVenta" type="button">Generar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </form>

@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" />
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const btnVenta = document.querySelector('#btnVenta');
        document.addEventListener('DOMContentLoaded', function() {
            $("#buscarCliente").autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url: "{{ route('venta.cliente') }}",
                        dataType: "json",
                        data: {
                            term: request.term
                        },
                        success: function(data) {
                            if (data.length === 0) {
                                errorCliente.textContent = "No se encontraron resultados.";
                            }
                            response(data);
                        }
                    });
                },
                minLength: 2, // Número mínimo de caracteres para mostrar sugerencias
                select: function(event, ui) {
                    id_cliente.value = ui.item.id;
                    tel_cliente.value = ui.item.telefono;
                    dir_cliente.value = ui.item.direccion
                }
            });
            btnVenta.addEventListener('click', function() {
                if (id_cliente.value == '') {
                    Swal.fire({
                        title: "Respuesta",
                        text: 'El cliente es requerido',
                        icon: 'warning'
                    });
                } else {
                    Swal.fire({
                        title: "Mensaje?",
                        text: "Esta seguro de procesar la venta!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Si, procesar!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            fetch('/venta', {
                                    method: 'POST',
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                        'Content-Type': 'application/json'
                                    },
                                    body: JSON.stringify({
                                        id_cliente: id_cliente.value
                                    })
                                })
                                .then(response => {
                                    return response.json();
                                })
                                .then(data => {
                                    Swal.fire({
                                        title: "Respuesta",
                                        text: data.title,
                                        icon: data.icon
                                    });
                                    if (data.icon == 'success') {
                                        setTimeout(() => {
                                            window.open('/venta/' + data.ticket +
                                                '/ticket', '_blank');
                                            window.location.reload();
                                        }, 1500);
                                    } else {

                                    }
                                })
                                .catch(error => {
                                    // Manejar errores
                                    console.error('Error: ', error);
                                });
                        }
                    });
                }

            })
        })
    </script>
@stop
