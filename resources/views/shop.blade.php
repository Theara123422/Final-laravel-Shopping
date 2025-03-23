@extends('master')

@section('title')
Shop Page
@endsection

@section('content')
<main>
    <main class="shop">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-9">
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
                            <div class="col-12">
                                <ul class="pagination">
                                    <li>
                                        <a href="/shop?page=1">1</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 filter">
                        <h4 class="title">Category</h4>
                        <ul>
                            <li>
                                <a href="/shop">ALL</a>
                            </li>
                            @foreach ($listCategories as $listCategory)
                            <li class="filter-category">
                                <a style="cursor: pointer;" category="{{ $listCategory -> id }}">{{ $listCategory -> category_name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
</main>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('.filter ul .filter-category a').on('click', function(e) {
            e.preventDefault();
            const category = $(this).attr('category');

            $.ajax({
                url: '/product/filter',
                method: 'GET',
                data: {
                    category
                },
                success: function(response) {
                    $('.container .row .col-9 .row').html(response);
                },
                error: function() {
                    console.log("error");
                }
            })

        })
    });
</script>
@endsection