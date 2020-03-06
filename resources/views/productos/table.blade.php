<div class="table-responsive">
    <table class="table" id="productos-table">
        <thead>
            <tr>
                <th>Descripcion</th>
        <th>Existencias</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productos as $productos)
            <tr>
                <td>{{ $productos->descripcion }}</td>
            <td>{{ $productos->existencias }}</td>
                <td>
                    {!! Form::open(['route' => ['productos.destroy', $productos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('productos.show', [$productos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('productos.edit', [$productos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
