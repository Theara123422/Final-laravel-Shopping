@if(count($products) > 0)
@foreach ($products as $product)
<div class="col-4">
    <figure>
        <div class="thumbnail">
            @if ($product -> sales_price > 0)
            <div class="status">
                Promotion
            </div>
            @endif
            <a href="/product-details/{{ $product -> id }}">
                <img height="400px" src="http://localhost/profile/{{  $product -> thumbnail  }}" alt="">
            </a>
        </div>
        <div class="detail">
            <div class="price-list">
                <div class="regular-price "><strike> US {{ $product -> regular_price }}</strike></div>
                @if($product -> sales_price > 0)
                <div class="sale-price ">US {{ $product -> sales_price }}</div>
                <div class="sale-price text-danger"> {{ number_format(($product -> sales_price * 100) / $product -> regular_price,2)}} % Off</div>
                @endif
            </div>
            <h5 class="title">{{ $product -> name }}</h5>
        </div>
    </figure>
</div>
@endforeach
@endif
@if (count($products) == 0)
    <h5 class="title">No Products to show.</h5>
@endif