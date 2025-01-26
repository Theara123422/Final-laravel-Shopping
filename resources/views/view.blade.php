@extends('master')

@section('page-title')
    View Product
@endsection

@section('content')
    <div class="container  content-container">
        <table class="table table-hover align-middle" style="table-layout: fixed;">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Category</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>MSI GF63 thin</td>
                <td>MSI</td>
                <td>$849.00</td>
                <td>Laptop</td>
                <td>
                    <img src="https://www.placehold.co/80" alt="">
                </td>
                <td>
                    <button class="btn btn-link"><i class="fa-solid fa-pen text-warning"></i></button>
                    <button class="btn btn-link"><i class="fa-solid fa-trash text-danger"></i></button>
                    <button class="btn btn-link"><i class="fa-solid fa-info text-primary"></i></button>                
                </td>
            </tr>
        </table>
    </div>
@endsection