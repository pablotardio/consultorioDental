<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $odontologo->nombre !!}</p>
</div>

<!-- Apellido Paterno Field -->
<div class="form-group">
    {!! Form::label('apellido_paterno', 'Apellido Paterno:') !!}
    <p>{!! $odontologo->apellido_paterno !!}</p>
</div>

<!-- Apellido Materno Field -->
<div class="form-group">
    {!! Form::label('apellido_materno', 'Apellido Materno:') !!}
    <p>{!! $odontologo->apellido_materno !!}</p>
</div>

<!-- Correo Field -->
<div class="form-group">
    {!! Form::label('correo', 'Correo:') !!}
    <p>{!! $odontologo->correo !!}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{!! $odontologo->direccion !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $odontologo->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $odontologo->updated_at !!}</p>
</div>

