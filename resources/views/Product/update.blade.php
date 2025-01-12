<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<body>
    <h2>Update Product</h2>
    <form action="" method="post">
        @csrf
        <label for="">Name : &emsp;</label>
        <input type="text" name="p_name" placeholder="Product's Name" value="{{$data[0] -> name}}"><br><br>
        <label for="">Quantity : </label>
        <input type="text" name="p_qty" placeholder="Product's Qty "  value="{{$data[0] -> qty}}"><br><br>
        <label for="">Price : &emsp;</label>
        <input type="text" name="p_price" placeholder="Product's Price"  value="{{$data[0] -> price}}"><br><br>
        <label for="">Remark : </label>
        <input type="text" name="p_remark" placeholder="Product's Remark"  value="{{$data[0] -> remark}}"><br><br>
        <input type="submit" value="Submit" name="btn_submit">
    </form>
</body>
</html>