<div class="table-responsive">
    <table class="table" id="citas-table">
        <thead>
            <tr>
                <th>Fecha</th>
        <th>Hora Inicio</th>
        <th>Hora Fin</th>
        <th>Odontologo</th>
        <th>Paciente</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($citas as $cita)
            <tr>
                <td>{!! $cita->fecha !!}</td>
            <td>{!! $cita->hora_inicio !!}</td>
            <td>{!! $cita->hora_fin !!}</td>
            <td>{!! $cita->Odontologo !!}</td>
            <td>{!! $cita->Paciente !!}</td>
                <td>
                    {!! Form::open(['route' => ['citas.destroy', $cita->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('citas.show', [$cita->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('citas.edit', [$cita->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
