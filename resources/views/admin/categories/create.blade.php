@extends('layouts.app')

@section('content')
<div class="container">

    <div class="title">Nova categoria</div>

    @include('errors._check')

    {{ Form::open(['route' => 'admin.categories.store']) }}

    @include('admin.categories._form')

    <div class="form-group">

        {{ Form::submit('Criar categoria', ['class' => 'btn btn-success']) }}
    </div>

    {{ Form::close() }}

</div>
@endsection