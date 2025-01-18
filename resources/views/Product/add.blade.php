<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <h2>Add Product</h2>
    <form action="/product/submit-product" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Name : &emsp;</label>
        <input type="text" name="p_name" placeholder="Product's Name"><br><br>
        <label for="">Quantity : </label>
        <input type="text" name="p_qty" placeholder="Product's Qty "><br><br>
        <label for="">Price : &emsp;</label>
        <input type="text" name="p_price" placeholder="Product's Price"><br><br>
        <label for="">Remark : </label>
        <input type="text" name="p_remark" placeholder="Product's Remark"><br><br>
        <label for="">Image : </label>
        <input type="file" name="p_image"><br><br>
        <input type="submit" value="Submit" name="btn_submit">
    </form>
</body>
</html>