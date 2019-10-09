<!-- Odontologo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Odontologo', 'Odontologo:') !!}
    {!! Form::select('Odontologo', $odontologos, null, ['class' => 'form-control']) !!}
</div>
<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha: ') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Hora Incio  Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_inicio', 'Hora Inicio :') !!}
    {!! Form::text('hora_inicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Hora Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_fin', 'Hora Fin:') !!}
    {!! Form::text('hora_fin', null, ['class' => 'form-control']) !!}
</div>

<!-- Paciente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Paciente', 'Paciente:') !!}
    {!! Form::select('Paciente', $pacientes, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('citas.index') !!}" class="btn btn-default">Cancel</a>
</div>
