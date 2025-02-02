<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <form action="/submit-edit-product" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="updated_id" value="{{$data[0] -> id}}">
        <label for="">Name : </label><br>
        <input type="text" name="updated_name" value="{{$data[0] -> name}}"><br>
        <label for="">Qty : </label><br>
        <input type="text" name="updated_qty"  value="{{$data[0] -> qty}}"><br>
        <label for="">Price : </label><br>
        <input type="text" name="updated_price"  value="{{$data[0] -> price}}"><br>
        <label for="">Remark : </label><br>
        <input type="text" name="updated_remark"  value="{{$data[0] -> remark}}"><br>
        <label for="">Image : </label><br>
        <input type="file" name="updated_image"><br>
        <input type="hidden" name="old_image" value="{{$data[0] -> image}}"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>