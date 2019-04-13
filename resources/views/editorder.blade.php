@extends('layouts.app')

@section('content')
    <h1>Отредактировать товар</h1>

    {!! Form::model($order, ['route' => ['orders.update', $order->id],  'method' => 'PUT']) !!}
    <div class="form-group">
        {{ Form::label('name', 'ФИО') }}
        {{ Form::text('name', $order->name, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Описание товара') }}
        {{ Form::textarea('email', $order->email, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('address', 'Адрес доставки') }}
        {{ Form::text('address', $order->address, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('cart', 'Содерживое заказа') }}
        {{ Form::text('cart', $order->cart, ['class' =>'form-control']) }}
    </div>

    {{ Form::submit('Редактировать товар', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}
@endsection