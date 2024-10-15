@extends('main')
@section('content')
<div id="carouselExampleAutoplaying" class="carousel slide h-25" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://media.istockphoto.com/id/1442688690/vector/a-black-and-asian-friend-go-looking-for-clothes-at-a-thrift-store-together.webp?s=1024x1024&w=is&k=20&c=zL7_Fi5KiOXsuLQ-oGzl6vd3d0JXW6fXB98LXbWwxCE=" class="d-block w-100" alt="image">
      </div>
      <div class="carousel-item">
        <img src="https://cdn.pixabay.com/photo/2016/05/24/16/48/mountains-1412683_960_720.png" class="d-block w-100" alt="image">
      </div>
      <div class="carousel-item">
        <img src="https://media.istockphoto.com/id/2155684084/vector/night-landscape-with-full-moon.jpg?s=1024x1024&w=is&k=20&c=z9GLu8yJ5IlV6yos1Se0Xg65zdGEaJQDb5Nv1f9oJ2k=" class="d-block w-100" alt="image">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection