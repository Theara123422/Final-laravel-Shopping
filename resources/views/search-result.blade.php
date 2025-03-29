<main class="shop">

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="main-title">
                        Product Result
                    </h3>
                </div>
            </div>
            <div class="row">
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
                                <div class="regular-price "> US {{ $product -> regular_price }}</div>
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
            </div>
        </div>
    </section>

</main>