@extends('layouts.app')

@section('content')
    <h1>Создать товар</h1>

    {!! Form::open(['route' => 'products.store']) !!}
    <div class="form-group">
        {{ Form::label('name', 'Название') }}
        {{ Form::text('name', null, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('content', 'Описание товара') }}
        {{ Form::textarea('content', null, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('price', 'Цена') }}
        {{ Form::text('price', null, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('image', 'Изображение (ссылка)') }}
        {{ Form::text('image', null, ['class' =>'form-control']) }}
    </div>

    {{ Form::submit('Создать товар', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}

@endsection
