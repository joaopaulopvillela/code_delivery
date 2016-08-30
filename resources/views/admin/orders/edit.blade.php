@extends('layouts.app')

@section('content')

    <div class="x_panel">
        <div class="x_title">

            <h2>Visualizando o pedido</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-default">Listagem de pedidos</a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="panel-body">

            <div class="row">
                <label class="col-lg-2">Pedidos</label>
                <div class="col-lg-6">#{{$order->id}}</div>

                <label class="col-lg-2">Data</label>
                <div class="col-lg-2">{{$order->created_at}}</div>
            </div>

            <div class="row">
                <label class="col-lg-2">Cliente</label>
                <div class="col-lg-6">{{$order->client->user->name}}</div>

                <label class="col-lg-2">Telefone</label>
                <div class="col-lg-2">{{ $order->client->phone }}</div>

            </div>

            <div class="row">
                <label class="col-lg-2">Endereço</label>
                <div class="col-lg-10">{{ $order->client->address }}, {{ $order->client->city }}</div>
            </div>

        </div>

        <div class="panel-body">

            {{ Form::model($order, ['route' => ['admin.orders.update', $order->id ]]) }}

            <div class="row form-group">

                {{ Form::label('category_id','Status:', ['class' => 'col-md-2']) }}
                <div class="col-lg-3">{{ Form::select('status', $list_status ,null, ['class' => 'form-control']) }}</div>

                @if( $order->status == 0 )
                    {{ Form::label('category_id','Entregador:', ['class' => 'col-md-2']) }}
                    <div class="col-lg-3">{{ Form::select('user_deliveryman_id', $deliveryman ,null, ['class' => 'form-control']) }}</div>
                @endif

                @if( !in_array($order->status, [3,4]))
                    {{ Form::submit('Atualizar Pedido', ['class' => 'btn btn-warning']) }}
                @endif

            </div>

            {{ Form::close() }}


        </div>
        <div class="panel-body row">
            <h2 class="title"> Listagem de produtos</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th class="text-center col-lg-1">Codigo</th>
                    <th class="text-center col-lg-1">Quantidade</th>
                    <th class="text-center">Produto</th>
                    <th class="text-center col-lg-1">Valor</th>
                    <th class="text-center col-lg-1">Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $order->items as $orderItem)
                    <tr>
                        <td class="text-center">{{ str_pad($orderItem->product->id,8,'0',STR_PAD_LEFT) }}</td>
                        <td class="text-center">{{ $orderItem->qtd }}</td>
                        <td>{{ $orderItem->product->name }}</td>
                        <td class="text-right">{{ $orderItem->price }}</td>
                        <td class="text-right">{{ $orderItem->qtd  * $orderItem->price }}</td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th colspan="3">Total</th>
                    <td colspan="2" class="text-right">{{ $order->total }}</td>
                </tr>
                </tfoot>
            </table>
        </div>

    </div>
@endsection