<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $setting->user_id }}</p>
</div>

<!-- Posid Field -->
<div class="col-sm-12">
    {!! Form::label('posId', 'Posid:') !!}
    <p>{{ $setting->posId }}</p>
</div>

<!-- Secretid Field -->
<div class="col-sm-12">
    {!! Form::label('secretId', 'Secretid:') !!}
    <p>{{ $setting->secretId }}</p>
</div>

<!-- Websitename Field -->
<div class="col-sm-12">
    {!! Form::label('websiteName', 'Websitename:') !!}
    <p>{{ $setting->websiteName }}</p>
</div>

<!-- Websitedescription Field -->
<div class="col-sm-12">
    {!! Form::label('websiteDescription', 'Websitedescription:') !!}
    <p>{{ $setting->websiteDescription }}</p>
</div>

<!-- Websiteimage Field -->
<div class="col-sm-12">
    {!! Form::label('websiteImage', 'Websiteimage:') !!}
    <p>{{ $setting->websiteImage }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $setting->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $setting->updated_at }}</p>
</div>

