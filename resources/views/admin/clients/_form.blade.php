
<div class="form-group">
    {{ Form::label('name','Nome:') }}
    {{ Form::text('user[name]',null, ['class' => 'form-control','placeholder' => 'Digite o nome da categoria']) }}
</div>

<div class="form-group">
    {{ Form::label('email','E-mail:') }}
    {{ Form::text('user[email]',null, ['class' => 'form-control','placeholder' => 'Digite o nome da categoria']) }}
</div>

<div class="form-group">
    {{ Form::label('phone','Telefone:') }}
    {{ Form::text('phone',null, ['class' => 'form-control','placeholder' => 'Digite o telefone']) }}
</div>

<div class="form-group">
    {{ Form::label('zipcode','CEP:') }}
    {{ Form::text('zipcode',null, ['class' => 'form-control','placeholder' => 'Digite o CEP do endereço']) }}
</div>

<div class="form-group">
    {{ Form::label('address','Endereço:') }}
    {{ Form::text('address',null, ['class' => 'form-control','placeholder' => 'Digite o endereço']) }}
</div>

<div class="form-group">
    {{ Form::label('city','Cidade:') }}
    {{ Form::text('city',null, ['class' => 'form-control','placeholder' => 'Digite a cidade']) }}
</div>

<div class="form-group">
    {{ Form::label('state','Estado:') }}
    {{ Form::text('state',null, ['class' => 'form-control','placeholder' => 'Digite o estado']) }}
</div>
