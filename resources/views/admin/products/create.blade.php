@extends('layouts.app')

@section('content')
    <div class="x_panel">
        <div class="x_title">

            <h2>Novo Produto</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-default">Listagem produto</a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>


        @include('errors._check')

        {{ Form::open(['route' => 'admin.products.store']) }}

        @include('admin.products._form')

        <div class="form-group">

            {{ Form::submit('Criar Produto', ['class' => 'btn btn-success']) }}
        </div>

        {{ Form::close() }}

    </div>
@endsection