<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Product</title>
</head>
<body>
    <form action="" method="post">
        <p>Are you sure you want to delete this item ?</p>
        <input type="text" name="del_id" value="{{$id}}"><br><br>
        <input type="submit" value="Submit">
        <a href="/">Cancel</a>
    </form>
</body>
</html>