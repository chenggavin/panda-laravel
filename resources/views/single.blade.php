@extends('layouts.app')

@section('content')
    <div class="container">
        <p><a href="{{ url('/menu') }}">Menu</a> / {{ $item->name }}</p>
        <h1>{{ $item->name }}</h1>

        <hr>

        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/' . $item->image) }}" alt="product" class="img-responsive">
            </div>

            <div class="col-md-8">
                <h3>${{ $item->price }}</h3>
                <form action="{{ url('/cart') }}" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <input type="hidden" name="name" value="{{ $item->name }}">
                    <input type="hidden" name="price" value="{{ $item->price }}">
                    <input type="submit" class="btn btn-success btn-lg" value="Add to Cart">
                </form>

                <br><br>

                {{ $item->description }}
            </div> <!-- end col-md-8 -->
        </div> <!-- end row -->



    </div> <!-- end container -->

@endsection
