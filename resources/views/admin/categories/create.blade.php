@extends('layouts.app')

@section('content')
    <div class="x_panel">
        <div class="x_title">

            <h2>Nova categoria</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-default">Listagem categoria</a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>


        @include('errors._check')

        {{ Form::open(['route' => 'admin.categories.store', 'class' => 'form-horizontal form-label-left']) }}

        @include('admin.categories._form')

        <div class="form-group">

            {{ Form::submit('Criar categoria', ['class' => 'btn btn-success']) }}
        </div>

        {{ Form::close() }}

    </div>
@endsection