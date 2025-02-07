@extends('templates.app')

@section('content')
    <div class="container">
        <h1>Editar produtos</h1>

        @if($errors->any())
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::model($product, array('route' => array('products.update', $product->id), 'method' => 'put')) !!}
        
            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', $product->name, array('class' => 'form-control', 'placeholder' => 'Digite seu nome')) !!}

            {!! Form::label('price', 'Preço:') !!}
            {!! Form::number('price', $product->price, array('class' => 'form-control', 'step' => 'any')) !!}

            {!! Form::label('description', 'Descrição:') !!}
            {!! Form::text('description', $product->description, array('class' => 'form-control', 'placeholder' => 'Digite a descrição')) !!}

            {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary mt-3']) !!}

        {!! Form::close() !!}
    </div>
@endsection