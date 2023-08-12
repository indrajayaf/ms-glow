@extends('layouts.main')
@section('container')
{{-- <h1 class="mb-3">{{ $title }}</h1> --}}

@if ($products->count())
    <div id="carouselExampleCaptions" class="carousel slide mb-3">
        <div class="carousel-indicators">
            <?php $count = 0; ?>
            @foreach ($products as $product)
                <?php if($count == 3) break; ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $count }}" class="@if ($count == 0) active @endif" aria-current="true" aria-label="{{ $product->name }}"></button>
                <?php $count++; ?>
            @endforeach
        </div>
        <div class="carousel-inner rounded shadow">
            @foreach ($carousel as $product)
            <div class="carousel-item active">
                <a href="/detail/{{ $product->id }}">
                    <img src="<?=str_replace('480', '300', str_replace('640', '1200', $product->imgUrl))?>" class="d-block w-100" alt="{{ $product->imgUrl }}">
                </a>
                <div class="carousel-caption d-none d-md-block">
                <h5 class="shadow">{{ $product->name }}</h5>
                <p>{{ "Rp " . number_format($product->price,2,',','.') }}</p>
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

    <div class="container pb-2">
        <div class="row">
            @foreach ($products->skip(3)->take(8) as $product)
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
