@extends('layouts.app')

@section('content')

    <div class="x_panel">
        <div class="x_title">

            <h2>Produtos</h2>

            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a href="{{ route('admin.products.create') }}" class="btn btn-default">Novo produto</a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <table class="table table-bordered">

            <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Categoria</td>
                <td>Preço</td>
                <td>Ação</td>
            </tr>
            </thead>

            <tbody>

            @foreach( $products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-default">Editar</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        {!! $products->render() !!}
    </div>

@endsection