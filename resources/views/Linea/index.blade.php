@extends('adminlte::page')

@section('title', 'Lineas')

@section('content_header')
    <h1>Lineas</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            <a href="{{ route('lineas.create') }}" class="btn btn-primary btn-md float-right"
                                data-placement="left">
                                <i class="fas fa-plus-square"></i>
                            </a>
                        </span>

                        {{--  <div class="float-right">
                            <a href="{{ route('lineas.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div> --}}
                    </div>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert fade_success .fade">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">&times;</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped table-hover display responsive nowrap" width="100%"
                            id="tblLineas">
                            <thead class="thead">
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link href="DataTables/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="DataTables/datatables.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new DataTable('#tblLineas', {
                responsive: true,
                fixedHeader: true,
                ajax: {
                    url: '{{ route('lineas.list') }}',
                    dataSrc: 'data'
                },
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'nombre'
                    },
                    {
                        // Agregar columna para acciones
                        data: null,
                        render: function(data, type, row) {
                            // Agregar botones de editar y eliminar
                           /*  return '<a class="btn btn-sm btn-primary" href="/lineas/' +
                                row.id + '/edit">Editar</a>' +
                                '<button class="btn btn-sm btn-danger" onclick="deleteLinea(' +
                                row.id + ')">Eliminar</button>'; */

                                return '<a class="btn btn-info btn-sm" href="/lineas/' +
                                row.id + '/edit"><i class="fas fa-pencil-alt"></i></a>' +
                                '<a class="btn btn-danger btn-sm" onclick="deleteLine(' +
                                row.id + ')"><i class="fas fa-trash"></i></a>';
                        }
                    }
                ],
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
                },
                order: [
                    [0, 'desc']
                ]
            });
        });

        // Función para eliminar un categoria
        function deleteLine(lineaid) {
            Swal.fire({
                title: "Eliminar",
                text: "¿Estás seguro de que quieres eliminar este categoria?",
                icon: "info",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch('/lineas/' + lineaid, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Content-Type': 'application/json'
                            },
                            // body: Puedes incluir un cuerpo si necesitas enviar datos adicionales al servidor
                        })
                        .then(response => {
                            return response.text();
                        })
                        .then(data => {
                            // Actualizar la tabla, si es necesario
                            $('#tblLineas').DataTable().ajax.reload();
                        })
                        .catch(error => {
                            // Manejar errores
                            console.error('Error al eliminar el categoria:', error);
                        });


                }
            });
        }
    </script>
@stop
