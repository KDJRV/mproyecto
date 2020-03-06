<!-- Id Producto Field -->
<div class="form-group">
    {!! Form::label('id_producto', 'Id Producto:') !!}
    <p>{{ $productos->id_producto }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $productos->descripcion }}</p>
</div>

<!-- Existencias Field -->
<div class="form-group">
    {!! Form::label('existencias', 'Existencias:') !!}
    <p>{{ $productos->existencias }}</p>
</div>

