<li class="{{ Request::is('personas*') ? 'active' : '' }}">
    <a href="{!! route('personas.index') !!}"><i class="fa fa-edit"></i><span>Personas</span></a>
</li>

<li class="{{ Request::is('padres*') ? 'active' : '' }}">
    <a href="{!! route('padres.index') !!}"><i class="fa fa-edit"></i><span>Padres</span></a>
</li>

<li class="{{ Request::is('aspirantes*') ? 'active' : '' }}">
    <a href="{!! route('aspirantes.index') !!}"><i class="fa fa-edit"></i><span>Aspirantes</span></a>
</li>

<li class="{{ Request::is('hermanos*') ? 'active' : '' }}">
    <a href="{!! route('hermanos.index') !!}"><i class="fa fa-edit"></i><span>Hermanos</span></a>
</li>

<li class="{{ Request::is('historiaAcademicas*') ? 'active' : '' }}">
    <a href="{!! route('historiaAcademicas.index') !!}"><i class="fa fa-edit"></i><span>Historia Academicas</span></a>
</li>

<li class="{{ Request::is('relacionColegios*') ? 'active' : '' }}">
    <a href="{!! route('relacionColegios.index') !!}"><i class="fa fa-edit"></i><span>Relacion Colegios</span></a>
</li>

<li class="{{ Request::is('documentos*') ? 'active' : '' }}">
    <a href="{!! route('documentos.index') !!}"><i class="fa fa-edit"></i><span>Documentos</span></a>
</li>

