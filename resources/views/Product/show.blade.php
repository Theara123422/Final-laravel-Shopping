<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
</head>
<body>
    <h1>List Product</h1>
    <a href="/product/add">Add Product</a><br><br>
    <table border="2">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
            <th>Remark</th>
            <th>Action</th>
        </tr>
        @foreach ($datas as $data)
            <tr>
                <td>{{$data -> id}}</td>
                <td>{{$data -> name}}</td>
                <td>{{$data -> qty}}</td>
                <td>{{$data -> price}}</td>
                <td>{{$data -> total}}</td>
                <td>{{$data -> remark}}</td>
                <td>
                    <a href="/update/{{$data -> id}}">Update</a>
                    <a href="">Remove</a>
                    <a href="/detail/{{$data -> id}}">Detail</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>