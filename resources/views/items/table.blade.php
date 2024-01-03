<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="items-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Image</th>
                <th>Short Description</th>
                <th>Description</th>
                <th>Lat</th>
                <th>Lon</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->slug }}</td>
                    <td>{{ $item->image }}</td>
                    <td>{{ $item->short_description }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->lat }}</td>
                    <td>{{ $item->lon }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['items.destroy', $item->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('items.show', [$item->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('items.edit', [$item->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $items])
        </div>
    </div>
</div>
