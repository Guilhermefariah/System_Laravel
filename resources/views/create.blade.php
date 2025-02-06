@extends('templates.app')

@section('content')
    <div class="container">
        <h1>Cadastrar novo produto</h1>

        {!! Form::open(array('url' => 'products', 'method' => 'post')) !!}

            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Digite seu nome')) !!}

            {!! Form::label('price', 'Preço:') !!}
            {!! Form::number('price', null, array('class' => 'form-control')) !!}

            {!! Form::label('description', 'Descrição:') !!}
            {!! Form::text('description', null, array('class' => 'form-control', 'placeholder' => 'Digite a descrição')) !!}

            {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary mt-3']) !!}

        {!! Form::close() !!}
    </div>
@endsection