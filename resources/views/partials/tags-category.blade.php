<div class="container py-2">
    <div class="row">
        <div class="mx-auto col-12 col-md-12 col-lg-12 text-center cat">
            <a class="mb-2 mx-1 btn btn-primary btn-category @if (!$category) active @endif" href="/product/" role="button">Categories</a>    
            @foreach ($categories as $key => $item)
                <a class="mb-2 mx-1 btn btn-primary btn-category @if($item == $category) active @endif" href="/category/{{ $item }}" role="button">{{ $item }}</a>
            @endforeach
        </div>
    </div>
</div>