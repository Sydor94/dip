@extends('layouts.app')

@section('content')
    <div style="margin-bottom: 15px;">
        <a href="{{ route('orders.create')}}" class="btn btn-primary"> Создать заказ</a>
    </div>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>id</th>
            <th>ФИО</th>
            <th>email</th>
            <th>Адрес доставки</th>
            <th>Содержимое заказа</th>
            <th>Дата создания</th>
            <th>Редактирование</th>
            <th>Удаление</th>
        </tr>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->name}}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->address }}</td>
                <td>{{ $order->cart }}</td>
                <td>{{ $order->created_at }}</td>
                <td>
                    <a href="{{ route('orders.edit', [$order->id]) }}" class="btn btn-success"><span class="fa fa-edit"></span> Редактировать</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['orders.destroy', $order->id]]) !!}
                    {!! Form::submit('Удалить', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Вы уверены?");']) !!}
                    {!! Form::close() !!}

                </td>
            </tr>
        @endforeach
    </table>
@endsection