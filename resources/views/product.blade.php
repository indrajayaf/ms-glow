@extends('layouts.main')
@section('container')
{{-- <h1 class="mb-3">{{ $title }}</h1> --}}

@if ($products->count())
    <div class="container pb-2">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-3 col-6 mb-3">
                <div class="card rounded shadow border-0">
                    <div>
                        <a href="/detail/{{ $product->id }}">
                            <img src="{{ $product->imgUrl }}" class="card-img-top img-product" alt="{{ $product->name }}">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="position-absolute px-2 py-1" style="bottom:10px; right:10px;"><a class="nav-active text-decoration-none" href="/detail/{{ $product->id }}" title="Add to cart"><i class="fa-duotone fa-cart-plus fa-lg"></i></a></div>  
                        <h6 class="card-title">{{ $product->name }}</h6>
                        <h5 class="card-text"><strong>{{ "Rp. " . number_format($product->price,2,',','.') }}</strong></h5>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
@else
    <p class="text-center fs-4">No product found.</p>
@endif


@endsection
