@extends('templates.app')

@section('content')
    <div class="container">
        <h1>Cadastrar novo produto</h1>

        @if($errors->any())
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                @endforeach
            </ul>

        @endif


        {!! Form::open(array('route' => 'products.store', 'method' => 'post')) !!}

            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Digite seu nome')) !!}

            {!! Form::label('price', 'Preço:') !!}
            {!! Form::number('price', null, array('class' => 'form-control', 'step' => 'any')) !!}

            {!! Form::label('description', 'Descrição:') !!}
            {!! Form::text('description', null, array('class' => 'form-control', 'placeholder' => 'Digite a descrição')) !!}

            {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary mt-3']) !!}

        {!! Form::close() !!}
    </div>
@endsection