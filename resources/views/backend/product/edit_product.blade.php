@extends('backend.master')

@section('site-title')
    Edit Product
@endsection

@section('content')
<div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <!-- File input -->
                <form action="/admin/product/submit-edit" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <input type="hidden" value="{{Auth::User() -> id}}" name="edited_id">
                                    <label for="formFile" class="form-label">Name</label>
                                    <input class="form-control" type="text" name="edited_name" value="{{$products[0]->name}}"/>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label">Quantity</label>
                                    <input class="form-control" type="text" name="edited_qty" value="{{$products[0]->qty}}"/>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label">Regular Price</label>
                                    <input class="form-control" type="number" name="edited_regular_price" value="{{$products[0]->regular_price}}" />
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label">Sale Price</label>
                                    <input class="form-control" type="number" name="edited_sale_price" value="{{$products[0]->sale_price}}" />
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label">Available Size</label>
                                    @php
                                        $selectedSize = is_string($products[0]->size) ? explode(',',$products[0]->size) : $products[0]->size;
                                    @endphp
                                    <select name="edited_size[]" class="form-control size-color" multiple="multiple" >
                                        <option value="s" @selected(in_array('s',$selectedSize))>S</option>
                                        <option value="m" @selected(in_array('m',$selectedSize))>M</option>
                                        <option value="l" @selected(in_array('l',$selectedSize))>L</option>
                                        <option value="xl" @selected(in_array('xl',$selectedSize))>XL</option>
                                        <option value="2xl" @selected(in_array('2xl',$selectedSize))>2XL</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label">Available Color</label>
                                    @php
                                        $selectedColor = is_string($products[0]->color) ? explode(',',$products[0]->color) : $products->color;
                                    @endphp
                                    <select name="edited_color[]" class="form-control size-color" multiple="multiple">
                                        <option value="black" @selected(in_array("black",$selectedColor))>Black</option>
                                        <option value="white" @selected(in_array("white",$selectedColor))>White</option>
                                        <option value="grey" @selected(in_array("grey",$selectedColor))>Grey</option>
                                        <option value="yellow" @selected(in_array("yellow",$selectedColor))>Yellow</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label">Category</label>
                                    <select name="edited_category" class="form-control" >
                                        @foreach ($category as $cat)
                                            <option value="{{$cat -> id}}" @selected($cat->id == $products[0]->category_id)>{{$cat -> name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label text-danger">Recommend image size 470 x 600 pixels.</label>
                                    <input class="form-control" type="file" name="edited_thumbnail" />
                                    <input type="text" name="updated_image" value="{{$products[0] -> thumbnail}}">
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label">Description</label>
                                    <textarea name="edited_description" class="form-control" cols="30" rows="10">{{$products[0]->description}}</textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" value="Edit Product">
                                <a href="/admin/product" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection