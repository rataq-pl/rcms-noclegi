<!-- Mail Field -->
<div class="col-sm-12">
    {!! Form::label('mail', 'Mail:') !!}
    <p>{{ $payment->mail }}</p>
</div>

<!-- Posid Field -->
<div class="col-sm-12">
    {!! Form::label('posId', 'Posid:') !!}
    <p>{{ $payment->posId }}</p>
</div>

<!-- Sessionid Field -->
<div class="col-sm-12">
    {!! Form::label('sessionId', 'Sessionid:') !!}
    <p>{{ $payment->sessionId }}</p>
</div>

<!-- Orderid Field -->
<div class="col-sm-12">
    {!! Form::label('orderId', 'Orderid:') !!}
    <p>{{ $payment->orderId }}</p>
</div>

<!-- Currency Field -->
<div class="col-sm-12">
    {!! Form::label('currency', 'Currency:') !!}
    <p>{{ $payment->currency }}</p>
</div>

<!-- Chanel Field -->
<div class="col-sm-12">
    {!! Form::label('chanel', 'Chanel:') !!}
    <p>{{ $payment->chanel }}</p>
</div>

<!-- Statement Field -->
<div class="col-sm-12">
    {!! Form::label('statement', 'Statement:') !!}
    <p>{{ $payment->statement }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $payment->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $payment->updated_at }}</p>
</div>

