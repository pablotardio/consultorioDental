













<li class="{{ Request::is('especialidads*') ? 'active' : '' }}">
    <a href="{!! route('especialidads.index') !!}"><i class="fa fa-edit"></i><span>Especialidads</span></a>
</li>





<li class="{{ Request::is('pacientes*') ? 'active' : '' }}">
    <a href="{!! route('pacientes.index') !!}"><i class="fa fa-edit"></i><span>Pacientes</span></a>
</li>

<li class="{{ Request::is('recepcionistas*') ? 'active' : '' }}">
    <a href="{!! route('recepcionistas.index') !!}"><i class="fa fa-edit"></i><span>Recepcionistas</span></a>
</li>





<li class="{{ Request::is('odontologos*') ? 'active' : '' }}">
    <a href="{!! route('odontologos.index') !!}"><i class="fa fa-edit"></i><span>Odontologos</span></a>
</li>





<li class="{{ Request::is('horarios*') ? 'active' : '' }}">
    <a href="{!! route('horarios.index') !!}"><i class="fa fa-edit"></i><span>Horarios</span></a>
</li>

<li class="{{ Request::is('citas*') ? 'active' : '' }}">
    <a href="{!! route('citas.index') !!}"><i class="fa fa-edit"></i><span>Citas</span></a>
</li>

