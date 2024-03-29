<div class="table-responsive">
    <table class="table" id="servicios-table">
        <thead>
            <tr>
                <th>Descripcion</th>
        <th>Precio</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($servicios as $servicios)
            <tr>
                <td>{{ $servicios->descripcion }}</td>
            <td>{{ $servicios->precio }}</td>
                <td>
                    {!! Form::open(['route' => ['servicios.destroy', $servicios->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('servicios.show', [$servicios->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('servicios.edit', [$servicios->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
