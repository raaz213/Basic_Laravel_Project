@extends('main')
@section("content")
<div class="custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-8">
        <div class="trending-wrapper">
            <h4>Results for Products</h4>
            @if($products->isEmpty())
                <p>No products found matching your search criteria.</p>
            @else
                @foreach($products as $item)
                    <div class="searched-item mb-4">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}" alt="Product Image" style="max-width: 200px;">
                            <div class="mt-3">
                                <h2>{{$item->name}}</h2>
                                <h5>{{ Str::limit($item->description, 100) }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
