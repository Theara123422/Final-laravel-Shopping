<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing Product</title>
</head>
<body>
    <a href="/create-product">Add Product</a>
    <br><br>
    <table border="1" >
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Quantity</td>
            <td>Price</td>
            <td>Remark</td>
            <td>Image</td>
            <td>Action</td>
        </tr>
        @foreach ($datas as $data)
            <tr>
                <td>{{$data -> id}}</td>
                <td>{{$data -> name}}</td>
                <td>{{$data -> qty}}</td>
                <td>{{$data -> price}}</td>
                <td>{{$data -> remark}}</td>
                <td>
                    <img width="80px" src="./images/{{$data -> image}}" alt="">
                </td>
                <td>
                    <a href="/edit-product/{{$data -> id}}">Update</a>&emsp;
                    <a href="/remove-product/{{$data -> id}}">Delete</a>&emsp;
                    <a href="">Details</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>