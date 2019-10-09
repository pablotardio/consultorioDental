<div class="table-responsive">
    <table class="table" id="recepcionistas-table">
        <thead>
            <tr>
                <th>Ci</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Correo</th>
        <th>Direccion</th>
        <th>Telefono</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($recepcionistas as $recepcionista)
            <tr>
                <td>{!! $recepcionista->ci !!}</td>
            <td>{!! $recepcionista->nombre !!}</td>
            <td>{!! $recepcionista->apellido_paterno !!}</td>
            <td>{!! $recepcionista->apellido_materno !!}</td>
            <td>{!! $recepcionista->correo !!}</td>
            <td>{!! $recepcionista->direccion !!}</td>
            <td>{!! $recepcionista->telefono !!}</td>
                <td>
                    {!! Form::open(['route' => ['recepcionistas.destroy', $recepcionista->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('recepcionistas.show', [$recepcionista->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('recepcionistas.edit', [$recepcionista->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
