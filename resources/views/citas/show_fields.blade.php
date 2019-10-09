<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{!! $cita->fecha !!}</p>
</div>

<!-- Hora Inicio Field -->
<div class="form-group">
    {!! Form::label('hora_inicio', 'Hora Inicio:') !!}
    <p>{!! $cita->hora_inicio !!}</p>
</div>

<!-- Hora Fin Field -->
<div class="form-group">
    {!! Form::label('hora_fin', 'Hora Fin:') !!}
    <p>{!! $cita->hora_fin !!}</p>
</div>

<!-- Odontologo Field -->
<div class="form-group">
    {!! Form::label('Odontologo', 'Odontologo:') !!}
    <p>{!! $cita->Odontologo !!}</p>
</div>

<!-- Paciente Field -->
<div class="form-group">
    {!! Form::label('Paciente', 'Paciente:') !!}
    <p>{!! $cita->Paciente !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $cita->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $cita->updated_at !!}</p>
</div>

