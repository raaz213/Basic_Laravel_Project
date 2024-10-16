@extends('main')
@section('content')
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h3>Results for Products</h3>
            @foreach ($products as $item)
                <div class="row cart-items border-bottom border-secondary mb-4">
                    <div class="col-sm-3">
                        <a href="detail/{{ $item->id }} ">
                            <img src="{{ $item->gallery }} " class="trending-image " alt="image">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <div class="">
                            <h3>{{ $item->name }} </h3>
                            <p><b>Price </b>: Rs {{ $item->price }}</p>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
                    </div>
                </div>
            @endforeach
            
            <a href="ordernow" class="btn btn-success mx-5 p-2">Order Now</a>
        </div>
    </div>
@endsection
