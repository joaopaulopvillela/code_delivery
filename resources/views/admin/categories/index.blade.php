@extends('layouts.app')

@section('content')

    <div class="x_panel">
        <div class="x_title">

            <h2>Categorias</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-default">Nova categoria</a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <table class="table table-bordered">

            <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Ação</td>
            </tr>
            </thead>

            <tbody>

            @foreach( $categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        <a href="{{ route('admin.categories.edit', $category->id) }}"
                           class="btn btn-default">Editar</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        {!! $categories->render() !!}
    </div>

@endsection