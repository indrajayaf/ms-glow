<div class="container pb-5">
    <div class="row">
        <div class="mx-auto col-12 col-md-12 col-lg-12 text-center cat pb-4">
            <a class="mb-2 mx-1 btn btn-primary btn-category @if (!$brand) active @endif" href="/product/" role="button">Brands</a>    
            @foreach ($brands as $key => $item)
                <a class="mb-2 mx-1 btn btn-primary btn-category @if($item == $brand) active @endif" href="/brand/{{ $item }}" role="button">{{ $item }}</a>
            @endforeach
        </div>
    </div>
</div>