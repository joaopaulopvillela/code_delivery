@extends('layouts.app')

@section('content')

    <div class="x_panel">
        <div class="x_title">

            <h2>Clientes</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a href="{{ route('admin.clients.create') }}" class="btn btn-default">Novo clinete</a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <table class="table table-bordered">

            <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Cidade</td>
                <td>Ação</td>
            </tr>
            </thead>

            <tbody>

            @foreach( $clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->user->name}}</td>
                    <td>{{$client->phone}}</td>
                    <td>{{$client->city}}</td>
                    <td>
                        <a href="{{ route('admin.clients.edit', $client->id) }}"
                           class="btn btn-default">Editar</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        {!! $clients->render() !!}
    </div>

@endsection