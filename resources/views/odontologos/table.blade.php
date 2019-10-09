<div class="table-responsive">
    <table class="table" id="odontologos-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Correo</th>
        <th>Direccion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($odontologos as $odontologo)
            <tr>
                <td>{!! $odontologo->nombre !!}</td>
            <td>{!! $odontologo->apellido_paterno !!}</td>
            <td>{!! $odontologo->apellido_materno !!}</td>
            <td>{!! $odontologo->correo !!}</td>
            <td>{!! $odontologo->direccion !!}</td>
                <td>
                    {!! Form::open(['route' => ['odontologos.destroy', $odontologo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('odontologos.show', [$odontologo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('odontologos.edit', [$odontologo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
