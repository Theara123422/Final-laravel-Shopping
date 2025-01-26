@extends('master')

@section('page-title')
    Create Product
@endsection

@section('content')
    <div class="container content-container border border-4 border-primary pt-2">
        <h3 class="text-center">Create Product</h3>
        <form action="/submit-product" method="post" enctype="multipart/form-data">
            @csrf
            <div class="left-side w-50 h-100 px-4">
                <label for="form-label">Name : </label>
                <input type="text" class="form-control border border-2 border-primary my-2" name="p_name">
                <label for="form-label">Brand : </label>
                <select name="p_brand" id="" class="form-select my-2 border border-2 border-primary">
                    <option value="msi">MSI</option>
                    <option value="asus">ASUS</option>
                    <option value="lenovo">Lenovo</option>

                </select>
                <label for="form-label">Price : </label>
                <input type="number" class="form-control border border-2 border-primary my-2" name="p_price">
                <label for="form-label">Address : </label>
                <input type="text" class="form-control border border-2 border-primary my-2" name="p_address">
                <button type="submit" class="btn btn-success px-5 mt-3  ">Submit</button>
                <button type="reset" class="btn btn-danger px-5 mt-3">Cancel</button>

            </div>
            <div class="right-side w-50 h-100">
                <label for="form-label">Category : </label>
                <select name="p_category" id="" class="form-select my-2 border border-2 border-primary">
                    <option value="promotion">Promotion</option>
                    <option value="laptop">Laptop</option>
                    <option value="accessories">Accessories</option>
                    <option value="pc builder">PC Builder</option>
                </select>
                <label for="form-label">Description : </label>
                <textarea class="form-control my-2 border border-2 border-primary" name="p_desc"></textarea>
                <label for="form-label">Image : </label>
                <input type="file" class="form-control border border-2 border-primary my-2" name="p_image"> 
            </div> 
            
        </form>
    </div>
@endsection