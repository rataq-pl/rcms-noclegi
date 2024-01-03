<!-- Item Id Field -->
<div class="col-sm-12">
    {!! Form::label('item_id', 'Item Id:') !!}
    <p>{{ $calendar->item_id }}</p>
</div>

<!-- From Field -->
<div class="col-sm-12">
    {!! Form::label('from', 'From:') !!}
    <p>{{ $calendar->from }}</p>
</div>

<!-- To Field -->
<div class="col-sm-12">
    {!! Form::label('to', 'To:') !!}
    <p>{{ $calendar->to }}</p>
</div>

<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $calendar->user_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $calendar->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $calendar->updated_at }}</p>
</div>

