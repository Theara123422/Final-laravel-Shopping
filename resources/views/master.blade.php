<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>
        @yield('page-title')
    </title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@324&display=swap');
        *{
            margin: 0;
            box-sizing: border-box;
            font-family: "Roboto";
        }
        .header-container{
            height: 100px;
        }
        .content-container{
            height: 60vh;
        }
        form{
            width: 100%;
            height: 90%;
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="container header-container border border-5 border-primary my-4 d-flex justify-content-between align-items-center">
        <a href="/">
            <h2 class="text-decoration-underline">Product Dashboard</h2>
        </a>
        <a class="btn btn-link" href="/create-product">Create New Product</a>
    </div>

    @yield('content')

    <div class="container header-container border border-5 border-primary my-4 d-flex justify-content-center align-items-center">
        <h2>@Computer_Shop</h2>
    </div>
</body>
</html>