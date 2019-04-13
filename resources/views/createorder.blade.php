@extends('layouts.app')

@section('content')
    <h1>Создать заказ</h1>

    {!! Form::open(['route' => 'orders.store']) !!}
    <div class="form-group">
        {{ Form::label('name', 'ФИО') }}
        {{ Form::text('name', null, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'email') }}
        {{ Form::textarea('email', null, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('address', 'Адрес доставки') }}
        {{ Form::text('address', null, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('cart', 'Содержимое заказа') }}
        {{ Form::text('cart', null, ['class' =>'form-control']) }}
    </div>

    {{ Form::submit('Создать товар', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}

@endsection