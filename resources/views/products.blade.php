@extends('layouts.app')

@section('content')
    <div style="margin-bottom: 15px;">
        <a href="{{ route('products.create')}}" class="btn btn-primary"> Создать товар</a>
    </div>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>Название</th>
            <th>Описание</th>
            <th>Цена</th>
            <th>Редактирование</th>
            <th>Удаление</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->content }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('products.edit', [$product->id]) }}" class="btn btn-success"><span class="fa fa-edit"></span> Редактировать</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id]]) !!}
                    {!! Form::submit('Удалить', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Вы уверены?");']) !!}
                    {!! Form::close() !!}

                </td>
            </tr>
        @endforeach
    </table>
@endsection
