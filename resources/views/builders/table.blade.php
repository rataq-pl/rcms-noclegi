<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="builders-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Content</th>
                <th>Modules</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($builders as $builder)
                <tr>
                    <td>{{ $builder->name }}</td>
                    <td>{{ $builder->content }}</td>
                    <td>{{ $builder->modules }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['builders.destroy', $builder->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('builders.show', [$builder->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('builders.edit', [$builder->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $builders])
        </div>
    </div>
</div>
