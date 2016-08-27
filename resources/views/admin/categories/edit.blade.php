@extends('layouts.app')

@section('content')
<div class="container">

    <div class="title">Editando a categoria</div>

   @include('errors._check')

    {{ Form::model($category, ['route' => ['admin.categories.update', $category->id ]]) }}

    @include('admin.categories._form')

    <div class="form-group">

        {{ Form::submit('Alterar categoria', ['class' => 'btn btn-warning']) }}
    </div>

    {{ Form::close() }}


</div>
@endsection