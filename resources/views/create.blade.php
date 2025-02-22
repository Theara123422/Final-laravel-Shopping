<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $err)
                <li style="color: red;">{{ $err }}</li>
            @endforeach
        </ul> 
    @endif
    <form action="/submit-add-product" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Name : </label><br>
        <input type="text" name="p_name"><br>
        <label for="">Qty : </label><br>
        <input type="text" name="p_qty"><br>
        <label for="">Price : </label><br>
        <input type="text" name="p_price"><br>
        <label for="">Remark : </label><br>
        <input type="text" name="p_remark"><br>
        <label for="">Image : </label><br>
        <input type="file" name="p_image" id=""><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>