<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Removing Product</title>
</head>
<body>
    <form action="/product/submit-delete" method="post">
        @csrf
        <p>Are you sure you want to delete?</p>
        <input type="text" name="del_id" value="{{$id}}">
        <input type="submit" value="Yes" name="btn_delete">
        <a href="/">Cancel</a>
    </form>
</body>
</html>