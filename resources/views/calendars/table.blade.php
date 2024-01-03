<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="calendars-table">
            <thead>
            <tr>
                <th>Item Id</th>
                <th>From</th>
                <th>To</th>
                <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($calendars as $calendar)
                <tr>
                    <td>{{ $calendar->item_id }}</td>
                    <td>{{ $calendar->from }}</td>
                    <td>{{ $calendar->to }}</td>
                    <td>{{ $calendar->user_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['calendars.destroy', $calendar->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('calendars.show', [$calendar->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('calendars.edit', [$calendar->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $calendars])
        </div>
    </div>
</div>
