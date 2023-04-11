<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="">
        @foreach ($arrProduct as $index => $product)
            @foreach ($product as $key => $value)
                @if (($key == 'status') and ($value == 'R'))
                    <div class="rstat">
                        <p><a href="/product/{{ $product["slug"] }}">name : {{ $product["name"] }}</a>
                        </p>
                        <p>status : {{ $product["status"] }}</p>
                        <p>price : {{ $product["price"] }}</p>
                    </div>
                @elseif (($key == 'status') and ($value == 'SR'))
                    <div class="srstat">
                        <p><a href="/product/{{ $product["slug"] }}">name : {{ $product["name"] }}</a>
                        </p>
                        <p>status : {{ $product["status"] }}</p>
                        <p>price : {{ $product["price"] }}</p>
                    </div>
                @elseif (($key == 'status') and ($value == 'SSR'))
                    <div class="ssrstat">
                        <p><a href="/product/{{ $product["slug"] }}">name : {{ $product["name"] }}</a>
                        </p>
                        <p>status : {{ $product["status"] }}</p>
                        <p>price : {{ $product["price"] }}</p>
                    </div>
                @endif
            @endforeach
        @endforeach
    </div>

    
</body>
</html>
