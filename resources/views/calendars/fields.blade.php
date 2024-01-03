<!-- Item Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('item_id', 'Item Id:') !!}
    {!! Form::text('item_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- From Field -->
<div class="form-group col-sm-6">
    {!! Form::label('from', 'From:') !!}
    {!! Form::text('from', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- To Field -->
<div class="form-group col-sm-6">
    {!! Form::label('to', 'To:') !!}
    {!! Form::text('to', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control', 'required']) !!}
</div>