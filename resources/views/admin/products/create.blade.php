@extends('layouts.app')

@section('content')
<div class="container">

    <div class="title">Novo Produto</div>

    @include('errors._check')

    {{ Form::open(['route' => 'admin.products.store']) }}

    @include('admin.products._form')

    <div class="form-group">

        {{ Form::submit('Criar Produto', ['class' => 'btn btn-success']) }}
    </div>

    {{ Form::close() }}

</div>
@endsection