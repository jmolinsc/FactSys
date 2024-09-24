<div class="box box-info padding-1">
    <div class="box-body row">        
        <div class="form-group col-md-3">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $producto->codigo, ['class' => 'form-control form-control-border' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('producto') }}
            {{ Form::text('producto', $producto->producto, ['class' => 'form-control form-control-border' . ($errors->has('producto') ? ' is-invalid' : ''), 'placeholder' => 'Producto']) }}
            {!! $errors->first('producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-sm-2">
            {{ Form::label('tipo', 'Tipo:') }}
            {!! Form::select(
                'tipo',
                ['Normal' => 'Normal', 'Serie' => 'Serie', 'Lote' => 'Lote'],
                $producto->tipo,
                [
                    'class' => 'custom-select form-control-border',
                    'placeholder' => 'Selecciona Tipo',
                ],
            ) !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('precio_compra') }}
            {{ Form::text('precio_compra', $producto->precio_compra, ['class' => 'form-control form-control-border' . ($errors->has('precio_compra') ? ' is-invalid' : ''), 'placeholder' => 'Precio Compra']) }}
            {!! $errors->first('precio_compra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('precio_venta') }}
            {{ Form::text('precio_venta', $producto->precio_venta, ['class' => 'form-control form-control-border' . ($errors->has('precio_venta') ? ' is-invalid' : ''), 'placeholder' => 'Precio Venta']) }}
            {!! $errors->first('precio_venta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('id_categoria', 'Categoría:') }}
            {!! Form::select('id_categoria', $categorias, $producto->id_categoria, ['class' => 'form-control form-control-border', 'placeholder' => 'Selecciona una categoría']) !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('id_familia', 'Familia:') }}
            {!! Form::select('id_familia', $familias, $producto->id_familia, ['class' => 'form-control form-control-border', 'placeholder' => 'Selecciona una categoría']) !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('id_fabricante', 'Fabricante:') }}
            {!! Form::select('id_fabricante', $fabricantes, $producto->id_fabricante, ['class' => 'form-control form-control-border', 'placeholder' => 'Selecciona un fabricante']) !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('id_linea', 'Linea:') }}
            {!! Form::select('id_linea', $lineas, $producto->id_linea, ['class' => 'form-control form-control-border', 'placeholder' => 'Selecciona una linea']) !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('foto', 'Foto') }}
            {{ Form::file('foto', ['class' => 'form-control form-control-border' . ($errors->has('foto') ? ' is-invalid' : ''), 'placeholder' => 'Foto']) }}
            {!! $errors->first('foto', '<div class="invalid-feedback">:message</div>') !!}
            @if ($producto->foto)
                <img src="{{ asset('storage/' . $producto->foto) }}" alt="Imagen actual" style="max-width: 100px; max-height: 100px;">
            @else
                <p>Sin imagen</p>
            @endif
        </div>        

    </div>
   {{--  <div class="box-footer mt20 text-right">
        <a href="/productos" class="btn btn-danger">{{ __('Cancel') }}</a>
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div> --}}
</div>