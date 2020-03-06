<li class="{{ Request::is('pruebas*') ? 'active' : '' }}">
    <a href="{{ route('pruebas.index') }}"><i class="fa fa-edit"></i><span>Pruebas</span></a>
</li>

<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{{ route('productos.index') }}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>

<li class="{{ Request::is('servicios*') ? 'active' : '' }}">
    <a href="{{ route('servicios.index') }}"><i class="fa fa-edit"></i><span>Servicios</span></a>
</li>

<li class="{{ Request::is('ventas*') ? 'active' : '' }}">
    <a href="{{ route('ventas.index') }}"><i class="fa fa-edit"></i><span>Ventas</span></a>
</li>

