@extends('frontend.master')

@section('title')
    Home Page
@endsection
@section('page-content')
<main class="home">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">
                                NEW PRODUCTS
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($ListLatestProduct as $ListLatestProductItem)
                            <div class="col-3">
                                <figure>
                                    <div class="thumbnail">
                                        <a href="{{route('product.detail',['id'=>$ListLatestProductItem -> id])}}">
                                            <img width="450" height="370px" src="../assets/image/{{$ListLatestProductItem->thumbnail}}" alt="">
                                        </a>
                                    </div>
                                    <div class="detail">
                                        <div class="price-list">
                                            @if($ListLatestProductItem -> sale_price < $ListLatestProductItem -> regular_price)
                                                <div class="regular-price "><strike> US {{$ListLatestProductItem -> regular_price}}</strike></div>
                                                <div class="sale-price ">US {{$ListLatestProductItem -> sale_price}}</div>
                                            @else
                                                <div class="regular-price "> US {{$ListLatestProductItem -> regular_price}}</div>
                                                <div class="sale-price d-none">US {{$ListLatestProductItem -> sale_price}}</div>
                                            @endif
                                        </div>
                                        <h5 class="title">{{$ListLatestProductItem -> name}}</h5>
                                    </div>
                                </figure>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">
                                PROMOTION PRODUCTS
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <figure>
                                <div class="thumbnail">
                                        <!-- <div class="status">
                                        Promotion
                                    </div>  -->
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
                                        <!-- <div class="status">
                                        Promotion
                                    </div>  -->
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
                                        <!-- <div class="status">
                                        Promotion
                                    </div>  -->
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
                                        <!-- <div class="status">
                                        Promotion
                                    </div>  -->
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

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">
                                POPULAR PRODUCTS
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <figure>
                                <div class="thumbnail">
                                     <!-- <div class="status">
                                        Promotion
                                    </div>  -->
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
                                    <!-- <div class="status">
                                        Promotion
                                    </div>  -->
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
                                   <!-- <div class="status">
                                        Promotion
                                    </div>  -->
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
                                    <!-- <div class="status">
                                        Promotion
                                    </div> -->
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
