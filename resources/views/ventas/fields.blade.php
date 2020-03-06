<!-- Id P Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_p', 'Id P:') !!}
    {!! Form::number('id_p', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_producto', 'Id Producto:') !!}
    {!! Form::number('id_producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Servicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_servicio', 'Id Servicio:') !!}
    {!! Form::number('id_servicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ventas.index') }}" class="btn btn-default">Cancel</a>
</div>
