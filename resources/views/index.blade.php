@extends('main')
@section('content')
    <div class="product-container">
        <div class="caurosel-container">
            <div id="carouselExampleAutoplaying" class="carousel slide h-25" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($products as $item)
                        <div class="carousel-item active">
                            <img src="{{ $item['gallery'] }} " class="slider-img d-block w-100 " alt="image">
                            <div class="carousel-caption">
                                <h3>{{ $item['name'] }} </h3>
                                <p>{{ $item['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="trending-wrapper">
            <h3>Trending Products</h3>
            @foreach ($products as $item)
                <div class="trending-items">
                   <a href="detail/{{$item['id']}} ">
                    <img src="{{ $item['gallery'] }} " class="trending-image " alt="image">
                    <div class="">
                        <h3>{{ $item['name'] }} </h3>
                        <p>Price : Rs {{ $item['price'] }}</p>
                    </div>
                   </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
