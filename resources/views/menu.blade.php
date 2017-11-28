@extends('layouts.app')

@section('content')

    <div class="container">


        @foreach ($items->chunk(4) as $items)
            <div class="row">
                @foreach ($items as $product)
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="caption text-center">
                                <a href="{{ url('shop', [$product->slug]) }}"><img src="{{ asset('img/' . $product->image) }}" alt="product" class="img-responsive"></a>
                                <a href="{{ url('shop', [$product->slug]) }}"><h3>{{ $product->name }}</h3>
                                <p>{{ $product->price }}</p>
                                </a>
                            </div> <!-- end caption -->
                        </div> <!-- end thumbnail -->
                    </div> <!-- end col-md-3 -->
                @endforeach
            </div> <!-- end row -->
        @endforeach

    </div> <!-- end container -->

@endsection
