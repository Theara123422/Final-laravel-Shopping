@extends('master')
@section('title')
    Product Detail Page
@endsection
@section('content')
<main class="shop product-detail">

<section class="review">
    <!-- <?php 
        dump($product -> thumbnail);
    ?> -->
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="thumbnail">
                    <img width="400" height="500" src="http://localhost/profile/{{ $product -> thumbnail }}" alt="">
                </div>
            </div>
            <div class="col-7">
                <div class="detail">
                    <div class="price-list">
                        @if ($product -> sales_price <= 0)
                            <div class="regular-price"> US {{ $product -> regular_price }}</div>
                        @endif
                        @if ($product -> sales_price > 0)
                            <div class="regular-price text-decoration-line-through"> US {{ $product -> regular_price }}</div>
                            <div class="sale-price">US {{ $product -> sales_price }}</div>
                            <div class="sale-price text-danger"> {{ number_format((($product -> regular_price - $product -> sales_price) / $product -> regular_price) * 100,2)}} % Off</div>
                        @endif
                    </div>
                    <h5 class="title">{{ $product -> name }}</h5>
                    <div class="group-size">
                        <span class="title">Color Available</span>
                        <div class="group">
                            {{ ucwords($product -> color,',') }}
                        </div>
                    </div>
                    <div class="group-size">
                        <span class="title">Size Available</span>
                        <div class="group">
                            {{ ucwords($product -> size,',') }}
                        </div>
                    </div>
                    <div class="group-size">
                        <span class="title">Description</span>
                        <div class="description">
                            {{ $product -> decription }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="main-title">
                    RELATED PRODUCTS
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <figure>
                    <div class="thumbnail">
                        <div class="status">
                            Promotion
                        </div>
                        <a href="">
                            <img src="https://placehold.co/450x670" alt="">
                        </a>
                    </div>
                    <div class="detail">
                        <div class="price-list">
                            <div class="price d-none">US 10</div>
                            <div class="regular-price "><strike> US 15</strike></div>
                            <div class="sale-price ">US 12</div>
                        </div>
                        <h5 class="title">T-Shirt 001</h5>
                    </div>
                </figure>
            </div>
            <div class="col-3">
                <figure>
                    <div class="thumbnail">
                        <div class="status">
                            Promotion
                        </div>
                        <a href="">
                            <img src="https://placehold.co/450x670" alt="">
                        </a>
                    </div>
                    <div class="detail">
                        <div class="price-list">
                            <div class="price d-none">US 10</div>
                            <div class="regular-price "><strike> US 15</strike></div>
                            <div class="sale-price ">US 12</div>
                        </div>
                        <h5 class="title">T-Shirt 001</h5>
                    </div>
                </figure>
            </div>
            <div class="col-3">
                <figure>
                    <div class="thumbnail">
                        <div class="status">
                            Promotion
                        </div>
                        <a href="">
                            <img src="https://placehold.co/450x670" alt="">
                        </a>
                    </div>
                    <div class="detail">
                        <div class="price-list">
                            <div class="price d-none">US 10</div>
                            <div class="regular-price "><strike> US 15</strike></div>
                            <div class="sale-price ">US 12</div>
                        </div>
                        <h5 class="title">T-Shirt 001</h5>
                    </div>
                </figure>
            </div>
            <div class="col-3">
                <figure>
                    <div class="thumbnail">
                        <div class="status">
                            Promotion
                        </div>
                        <a href="">
                            <img src="https://placehold.co/450x670" alt="">
                        </a>
                    </div>
                    <div class="detail">
                        <div class="price-list">
                            <div class="price d-none">US 10</div>
                            <div class="regular-price "><strike> US 15</strike></div>
                            <div class="sale-price ">US 12</div>
                        </div>
                        <h5 class="title">T-Shirt 001</h5>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</section>

</main>
@endsection