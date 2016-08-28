@extends('layouts.app')

@section('content')
    <div class="x_panel">
        <div class="x_title">

            <h2>Editando o produto</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-default">Listagem produto</a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>


        @include('errors._check')

        {{ Form::model($product, ['route' => ['admin.products.update', $product->id ]]) }}

        @include('admin.products._form')

        <div class="form-group">

            {{ Form::submit('Alterar o produto', ['class' => 'btn btn-warning']) }}
        </div>

        {{ Form::close() }}


    </div>
@endsection