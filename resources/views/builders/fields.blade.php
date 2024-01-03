<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::text('content', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Modules Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modules', 'Modules:') !!}
    {!! Form::text('modules', null, ['class' => 'form-control']) !!}
</div>