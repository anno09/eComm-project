@extends('master')
@section('content')
<div class=" custom-product">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach ($products as $item )  
            <div class="carousel-item {{$item['id']==1? 'active':''}}">
                <img  src="{{$item['gallery']}}" class="slider-img" alt="...">
                <div class="carousel-caption">
                    <h5>{{$item['name']}}</h5>
                    <h5>RS:{{$item['price']}}</h5>
                    <p>{{$item['description']}}</p>
                </div>
            </div>
            @endforeach
         </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="tranding-wrapper">
        <h3><center>Tranding Products</center></h3>
        @foreach ($products as $item ) 
        <div class="tranding-item">
            <img class="tranding-img" src="{{$item['gallery']}}">
            <div class="">
                <h5>{{$item['name']}}</h5>
                <h5>RS:{{$item['price']}}</h5>
            </div>
        </div>
        @endforeach
      </div>
</div>

@endsection