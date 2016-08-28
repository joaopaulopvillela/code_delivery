@extends('layouts.app')

@section('content')

        <div class="x_panel">
            <div class="x_title">

                <h2>Editando a categoria</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-default">Listagem categoria</a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>


            @include('errors._check')

            {{ Form::model($category, ['route' => ['admin.categories.update', $category->id ]]) }}

            @include('admin.categories._form')

            <div class="form-group">

                {{ Form::submit('Alterar categoria', ['class' => 'btn btn-warning']) }}
            </div>

            {{ Form::close() }}


        </div>
@endsection