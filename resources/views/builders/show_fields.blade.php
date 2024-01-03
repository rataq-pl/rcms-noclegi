<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $builder->name }}</p>
</div>

<!-- Content Field -->
<div class="col-sm-12">
    {!! Form::label('content', 'Content:') !!}
    <p>{{ $builder->content }}</p>
</div>

<!-- Modules Field -->
<div class="col-sm-12">
    {!! Form::label('modules', 'Modules:') !!}
    <p>{{ $builder->modules }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $builder->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $builder->updated_at }}</p>
</div>

