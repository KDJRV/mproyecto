<div class="table-responsive">
    <table class="table" id="pruebas-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Direccion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pruebas as $prueba)
            <tr>
                <td>{{ $prueba->nombre }}</td>
            <td>{{ $prueba->direccion }}</td>
                <td>
                    {!! Form::open(['route' => ['pruebas.destroy', $prueba->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pruebas.show', [$prueba->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('pruebas.edit', [$prueba->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
