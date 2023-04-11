@extends('layout/main')

@section('title')
    Product
@endsection

@section('keyword', 'Sunscreen, Best Sunscreen, Affordable Sunscreen, Sunblock')
@section('description', 'List of sunscreen product with the price and ingredient')

@section('content')
    <div class="prodlist">
        @foreach ($arrProduct as $index => $product)
            @foreach ($product as $key => $value)
                @if (($key == 'status') and ($value == 'R'))
                    <div class="card text-dark bg-light mb-3" style="max-width: 100%;">
                        <div class="card-header">Sunscreen Product</div>
                        <div class="card-body">
                            <p><a href="/product/{{ $product["slug"] }}">
                                Sunscreen Name : {{ $product["name"] }}</a>
                            </p>
                            <p>Status : {{ $product["status"] }}</p>
                            <p>Price : {{ $product["price"] }}</p>
                        </div>
                    </div>
                @elseif (($key == 'status') and ($value == 'SR'))
                    <div class="card text-dark bg-warning mb-3" style="max-width: 100%;">
                        <div class="card-header">Sunscreen Product</div>
                        <div class="card-body">
                            <p><a href="/product/{{ $product["slug"] }}">
                                Sunscreen Name : {{ $product["name"] }}</a>
                            </p>
                            <p>Status : {{ $product["status"] }}</p>
                            <p>Price : {{ $product["price"] }}</p>
                        </div>
                    </div>
                @elseif (($key == 'status') and ($value == 'SSR'))
                    <div class="card text-light bg-danger mb-3" style="max-width: 100%;">
                        <div class="card-header">Sunscreen Product</div>
                        <div class="card-body">
                            <p><a href="/product/{{ $product["slug"] }}">
                                Sunscreen Name : {{ $product["name"] }}</a>
                            </p>
                            <p>Status : {{ $product["status"] }}</p>
                            <p>Price : {{ $product["price"] }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
    </div>
@endsection
