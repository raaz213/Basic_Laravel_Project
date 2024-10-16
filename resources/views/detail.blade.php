@extends('main')
@section('content')
    <div class="container">
        <div class="row">
            <div class=" col-sm-6">
                <img src="{{ $details['gallery'] }}" class="h-50 w-auto">
            </div>
            <div class="col-sm-6">
                <h3><a href="/">Go Back</a></h3>
                <h2>{{ $details['name'] }} </h2>
                <h3>Price : {{ $details['price'] }} </h3>
                <h4>Description : {{ $details['description'] }} </h4>
                <h4>Category : {{ $details['category'] }} </h4>
                <br><br>
                <form action="/add_to_cart" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$details['id']}} ">
                    <button class="btn btn-primary">Add to Cart</button>
                </form> <br> 
                <button class="btn btn-success">Buy Now</button>
            </div>
        </div>
    </div>
@endsection
