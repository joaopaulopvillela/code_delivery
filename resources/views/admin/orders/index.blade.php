@extends('layouts.app')

@section('content')

    <div class="x_panel">
        <div class="x_title">

            <h2>Pedidos</h2>
            <div class="clearfix"></div>

        </div>

        <table class="table table-bordered">

            <thead>
            <tr>
                <td>ID</td>
                <td>Cliente</td>
                <td>Entregador</td>
                <td>Total</td>
                <td>Status</td>
                <td>Ação</td>
            </tr>
            </thead>

            <tbody>

            @foreach( $orders as $order)
                <tr>
                    <td>#{{$order->id}}</td>
                    <td>{{$order->client->user->name}}</td>
                    <td>
                        @if($order->deliverynam)
                            {{$order->deliverynam->name}}
                        @else
                            --
                        @endif
                    </td>
                    <td>R$ {{ $order->total }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <a href="{{ route('admin.orders.edit', $order->id) }}"
                           class="btn btn-default">Editar</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        {!! $orders->render() !!}
    </div>

@endsection