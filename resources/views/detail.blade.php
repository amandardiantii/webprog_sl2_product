@extends('layout/main')

@section('title')
    Product Detail
@endsection

@section('keyword', 'Sunscreen, Best Sunscreen, Affordable Sunscreen, Sunblock')
@section('description', 'List of sunscreen product with the price and ingredient')

@section('content')
<div class="card border-dark mb-3" style="max-width: 100%;" id="details">
    <div class="card-header">Product Detail</div>
    <div class="card-body text-dark">
      <h5 class="card-title">Sunscreen Name : {{ $newdetail["name"] }}</h5>
      <p>Status : {{ $newdetail["status"] }}</p>
      <p>Ingredient : {{ $newdetail["ingredient"] }}</p>
      <p>Price : {{ $newdetail["price"] }}</p>
    </div>
</div>
@endsection
