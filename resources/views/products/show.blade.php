@extends('templates.app')

@section('content')

<div class="container">
    <h1>{{ $product->name }}</h1>
    <p><strong>{{ $product->price }}</strong></p>
    <p>{{ $product->description }}</p>

</div>

@endsection 