@extends('layouts.app')

@section('content')
<div class="container">

    <div class="title">Editando o produto</div>

   @include('errors._check')

    {{ Form::model($product, ['route' => ['admin.products.update', $product->id ]]) }}

    @include('admin.products._form')

    <div class="form-group">

        {{ Form::submit('Alterar o produto', ['class' => 'btn btn-warning']) }}
    </div>

    {{ Form::close() }}


</div>
@endsection