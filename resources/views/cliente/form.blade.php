<div class="box box-info padding-1">
    <div class="box-body row">
        <div class="form-group col-sm-2">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $cliente->codigo, ['class' => 'form-control form-control-border' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-2">
            {{ Form::label('tipo', 'Tipo:') }}
            {!! Form::select(
                'tipo',
                ['Cliente' => 'Cliente', 'Empleado' => 'Empleado', 'Exportacion' => 'Exportacion'],
                $cliente->tipo,
                [
                    'class' => 'custom-select form-control-border',
                    'placeholder' => 'Selecciona Tipo',
                ],
            ) !!}
        </div>
        <div class="form-group col-sm-4">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $cliente->nombre, ['class' => 'form-control form-control-border' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-2">
            {{ Form::label('dui') }}
            {{ Form::text('dui', $cliente->dui, ['class' => 'form-control form-control-border' . ($errors->has('dui') ? ' is-invalid' : ''), 'placeholder' => 'Dui']) }}
            {!! $errors->first('dui', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-2">
            {{ Form::label('nit') }}
            {{ Form::text('nit', $cliente->nit, ['class' => 'form-control form-control-border' . ($errors->has('nit') ? ' is-invalid' : ''), 'placeholder' => 'Nit']) }}
            {!! $errors->first('nit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-2">
            {{ Form::label('nrc') }}
            {{ Form::text('nrc', $cliente->nrc, ['class' => 'form-control form-control-border' . ($errors->has('nrc') ? ' is-invalid' : ''), 'placeholder' => 'Nrc']) }}
            {!! $errors->first('nrc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-2">
            {{ Form::label('giro') }}
            {{ Form::text('giro', $cliente->giro, ['class' => 'form-control form-control-border' . ($errors->has('giro') ? ' is-invalid' : ''), 'placeholder' => 'Nit']) }}
            {!! $errors->first('giro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-2">
            {{ Form::label('actividadeconomica', 'Ac. Economica:') }}
            {!! Form::select(
                'actividadeconomica',
                ['San Salvador' => 'San Salvador', 'La Libertad' => 'La Libertad', 'San Miguel' => 'San Miguel'],
                $cliente->actividadeconomica,
                [
                    'class' => 'custom-select form-control-border',
                    'placeholder' => 'Selecciona Actividad Economica',
                ],
            ) !!}
        </div>
        <div class="form-group col-sm-2">
            {{ Form::label('regimenfiscal', 'regimenfiscal:') }}
            {!! Form::select(
                'regimenfiscal',
                ['San Salvador' => 'San Salvador', 'Apopa' => 'Apopa'],
                $cliente->regimenfiscal,
                [
                    'class' => 'custom-select form-control-border',
                    'placeholder' => 'Selecciona Regimen fiscal',
                ],
            ) !!}
        </div>
   
        <div class="form-group col-sm-2">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $cliente->telefono, ['class' => 'form-control form-control-border' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Teléfono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group col-sm-2">
            {{ Form::label('estatus', 'Estatus:') }}
            {!! Form::select(
                'estatus',
                ['ALTA' => 'ALTA', 'BAJA' => 'BAJA'],
                $cliente->estatus,
                [
                    'class' => 'custom-select form-control-border',
                    'placeholder' => 'Selecciona Estatus',
                ],
            ) !!}
        </div>
       
        <div class="form-group col-sm-4">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $cliente->direccion, ['class' => 'form-control form-control-border' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Dirección']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-2">
            {{ Form::label('categoria', 'Categoria:') }}
            {!! Form::select(
                'categoria',
                ['San Salvador' => 'San Salvador', 'La Libertad' => 'La Libertad', 'San Miguel' => 'San Miguel'],
                $cliente->categoria,
                [
                    'class' => 'custom-select form-control-border',
                    'placeholder' => 'Selecciona Categoria',
                ],
            ) !!}
        </div>
        <div class="form-group col-sm-2">
            {{ Form::label('famila', 'Famila:') }}
            {!! Form::select(
                'familia',
                ['San Salvador' => 'San Salvador', 'La Libertad' => 'La Libertad', 'San Miguel' => 'San Miguel'],
                $cliente->familia,
                [
                    'class' => 'custom-select form-control-border',
                    'placeholder' => 'Selecciona Familia',
                ],
            ) !!}
        </div>
        <div class="form-group col-sm-2">
            {{ Form::label('grupo', 'Grupo:') }}
            {!! Form::select(
                'grupo',
                ['San Salvador' => 'San Salvador', 'La Libertad' => 'La Libertad', 'San Miguel' => 'San Miguel'],
                $cliente->familia,
                [
                    'class' => 'custom-select form-control-border',
                    'placeholder' => 'Selecciona Grupo',
                ],
            ) !!}
        </div>
        <div class="form-group col-sm-2">
            {{ Form::label('pais', 'Pais:') }}
            {!! Form::select('pais', ['SV' => 'El Salvador', 'HN' => 'Honduras'], $cliente->pais, [
                'class' => 'custom-select form-control-border',
                'placeholder' => 'Selecciona Pais',
            ]) !!}
        </div>


        <div class="form-group col-sm-2">
            {{ Form::label('departamento', 'Departamento:') }}
            {!! Form::select(
                'departamento',
                ['San Salvador' => 'San Salvador', 'La Libertad' => 'La Libertad', 'San Miguel' => 'San Miguel'],
                $cliente->departamento,
                [
                    'class' => 'custom-select form-control-border',
                    'placeholder' => 'Selecciona Departamento',
                ],
            ) !!}
        </div>
        <div class="form-group col-sm-2">
            {{ Form::label('municipio', 'Municipio:') }}
            {!! Form::select('municipio', ['San Salvador' => 'San Salvador', 'Apopa' => 'Apopa'], $cliente->municipio, [
                'class' => 'custom-select form-control-border',
                'placeholder' => 'Selecciona Municipio',
            ]) !!}
        </div>
        <div class="form-group col-sm-2">
            {{ Form::label('colonia', 'Colonia:') }}
            {!! Form::select('colonia', ['San Salvador' => 'San Salvador', 'Apopa' => 'Apopa'], $cliente->colonia, [
                'class' => 'custom-select form-control-border',
                'placeholder' => 'Selecciona colonia',
            ]) !!}
        </div>
        <div class="form-group col-sm-2">
            {{ Form::label('contacto') }}
            {{ Form::text('contacto', $cliente->contacto, ['class' => 'form-control form-control-border' . ($errors->has('contacto') ? ' is-invalid' : ''), 'placeholder' => 'Contacto']) }}
            {!! $errors->first('contacto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-2">
            {{ Form::label('email') }}
            {{ Form::text('email', $cliente->email, ['class' => 'form-control form-control-border' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
   {{--  <div class="box-footer mt20 text-right">
        <a href="/clientes" class="btn btn-danger">{{ __('Cancel') }}</a>
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>

    </div> --}}
</div>
