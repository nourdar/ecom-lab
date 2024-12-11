@extends('layouts.app')

@section('title', $product['name'])

@section('content')
    <h1 class="text-3xl font-bold">{{ $product['name'] }}</h1>
    <p>Price: ${{ $product['price'] }}</p>
@endsection
