<div class="table-responsive">
    <table class="table" id="horarios-table">
        <thead>
            <tr>
                <th>Dia</th>
        <th>Hora Inicio</th>
        <th>Hora Fin</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($horarios as $horario)
            <tr>
                <td>{!! $horario->dia !!}</td>
            <td>{!! $horario->hora_inicio !!}</td>
            <td>{!! $horario->hora_fin !!}</td>
                <td>
                    {!! Form::open(['route' => ['horarios.destroy', $horario->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('horarios.show', [$horario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('horarios.edit', [$horario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
