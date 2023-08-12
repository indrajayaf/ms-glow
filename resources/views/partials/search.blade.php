<div class="container pb-3">
    <div class="row">
        <div class="mx-auto col-12 col-md-8 col-lg-6">
            <form action="/product">
                <div class="input-group flex-nowrap search-input">
                    <span class="input-group-text" style="background-color: #f2f2f2; border:none;" id="addon-wrapping"><i class="fa-duotone fa-magnifying-glass"></i></span>
                    <input name="search" type="text" class="form-control" style="background-color: #f2f2f2; border:none;" placeholder="Search Product" aria-label="Search Product" aria-describedby="addon-wrapping" value="{{ request('search') }}">
                  </div>
            </form>
        </div>
    </div>
</div>