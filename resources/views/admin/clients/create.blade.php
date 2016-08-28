@extends('layouts.app')

@section('content')
    <div class="x_panel">
        <div class="x_title">

            <h2>Novo cliente</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a href="{{ route('admin.clients.index') }}" class="btn btn-default">Listagem de clientes</a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>


        @include('errors._check')

        {{ Form::open(['route' => 'admin.clients.store', 'class' => 'form-horizontal form-label-left']) }}

        @include('admin.clients._form')

        <div class="form-group">

            {{ Form::submit('Criar cliente', ['class' => 'btn btn-success']) }}
        </div>

        {{ Form::close() }}

    </div>
@endsection