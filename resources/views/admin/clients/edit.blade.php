@extends('layouts.app')

@section('content')

    <div class="x_panel">
        <div class="x_title">

            <h2>Editando o clinete</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a href="{{ route('admin.clients.index') }}" class="btn btn-default">Listagem de cliente</a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>


        @include('errors._check')

        {{ Form::model($client, ['route' => ['admin.clients.update', $client->id ]]) }}

        @include('admin.clients._form')

        <div class="form-group">

            {{ Form::submit('Alterar cliente', ['class' => 'btn btn-warning']) }}
        </div>

        {{ Form::close() }}


    </div>
@endsection