<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing Post</title>
</head>
<body>
    <a href="/add-post">Add Post</a>
    <br><br>
    <table border="1" >
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post -> id }}</td>
            <td>{{ $post -> title }}</td>
            <td>{{ $post -> description }}</td>
            <td>
                <img src="./image/{{ $post -> image }}" alt="">
            </td>
            <td>
                <button>update</button>
                <button>delete</button>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>