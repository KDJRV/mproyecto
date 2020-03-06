<!-- Id Servicio Field -->
<div class="form-group">
    {!! Form::label('id_servicio', 'Id Servicio:') !!}
    <p>{{ $servicios->id_servicio }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $servicios->descripcion }}</p>
</div>

<!-- Precio Field -->
<div class="form-group">
    {!! Form::label('precio', 'Precio:') !!}
    <p>{{ $servicios->precio }}</p>
</div>

