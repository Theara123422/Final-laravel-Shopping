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
                                            <a category="{{ $listCategory -> id }}" href="/shop">{{ $listCategory -> category_name }}</a>
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
        $(document).ready(function(){
            $('.filter ul .filter-category a').on('click',function(e){
                e.preventDefault();
                const category = $(this).attr('category')

                $.ajax({
                    url : '/product/filter',
                    method : 'GET',
                    data : {
                        category
                    },
                    success : function(response){
                        $('.container .row .col-9 .row').html(response);
                    },
                    error :function (){
                        console.log("error");
                    }
                })
                
            })
        });
    </script>
@endsection