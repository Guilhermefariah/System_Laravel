@extends('templates.app')

@section('content')
    <div class="container">
        <p>Lista de produtos</p>

        <p><a href="{{ route('products.create') }}" class="btn btn-success" >Novo</a></p>

        <table class="table table-condensed">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Preço</td>
                    <td>Descrição</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar</a>
                            {{ Form::open(array('route' => array('products.destroy', $product->id), 'method' => 'delete')) }}
                            {{ Form::submit('Excluir', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
