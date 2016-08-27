
<div class="form-group">
    {{ Form::label('category_id','Categoria:') }}
    {{ Form::select('category_id', $categories ,null, ['class' => 'form-control','placeholder' => 'Digite o nome da categoria']) }}
</div>

<div class="form-group">
    {{ Form::label('name','Nome:') }}
    {{ Form::text('name',null, ['class' => 'form-control','placeholder' => 'Digite o nome da categoria']) }}
</div>

<div class="form-group">
    {{ Form::label('price','Preço:') }}
    {{ Form::text('price',null, ['class' => 'form-control','placeholder' => 'Digite o valor do produto']) }}
</div>

<div class="form-group">
    {{ Form::label('description','Descrição:') }}
    {{ Form::textarea('description',null, ['class' => 'form-control','placeholder' => 'Digite a descrição do produto']) }}
</div>
