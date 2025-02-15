<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <form action="/submit-add-post" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Title : </label><br>
        <input type="text" name="p_name"><br>
        <label for="">Description : </label><br>
        <input type="text" name="p_desc"><br>
        <label for="">Image : </label><br>
        <input type="file" name="p_image" ><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>