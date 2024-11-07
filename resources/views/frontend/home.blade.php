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
                        <div class="col-3">
                            <figure>
                                <div class="thumbnail">
                                    <div class="status">
                                        Promotion
                                    </div>
                                    <a href="{{route('product.detail',['id'=>1])}}">
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
