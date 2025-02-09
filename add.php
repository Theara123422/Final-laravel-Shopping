<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Car Management</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        * {
            font-family: "Roboto";
        }

        .header-container {
            height: 100px;
        }
        .table-container{
            height: 400px;
    
        }
    </style>
</head>

<body>
    <div class="header-container container bg-danger my-4 d-flex justify-content-between align-items-center px-4">
        <h2 class="text-light ">
            Crud Car
        </h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="btn_add">Add Product</button>

        <!-- Modal Add -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel" >Add Car</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" id="p_id" name="c_id">
                            <label for="" class="form-label">Name : </label>
                            <input type="text" name="c_name" class="form-control border border-2 border-primary" id="p_name">
                            <label for="" class="form-label">Brands : </label>
                            <select name="c_brand" id="p_brand" class="form-select border border-2 border-primary">
                                <option value="Luxus">Luxus</option>
                                <option value="Highlander">Highlander</option>
                                <option value="Roll Royce">Roll Royce</option>
                                <option value="Toyota">Toyota</option>
                            </select>
                            <label for="" class="form-label">Price : </label>
                            <input type="number" name="c_price" class="form-control border border-2 border-primary" id="p_price">
                            <label for="" class="form-label">Remark : </label>
                            <textarea name="c_remark" class="form-control border border-2 border-primary" id="p_remark"></textarea>
                            <label for="" class="form-label my-3">Image : </label>
                            <input type="file" name="c_image" id="image" class="form-control">
                            <input type="hidden" id="hidden_image" name="hidden_image">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" name="btn_confirm_add" id="btn_confirm_add">Confirm Add</button>
                        <button type="submit" name="btn_confirm_update" class="btn btn-warning" id="btn_confirm_edit">Confirm Edit</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- Modal Delete -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Product</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <input type="hidden" name="hidden_id" id="hidden_id">
                            <p>Are you sure , want to delete this product ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success" name="btn_confirm_delete">Confirm delete</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <?php 
        include 'show.php';
    ?>

</body>

</html>
<script>
        $(document).ready(function(){
            $('#image').on('change',function(){
                const image = $('#image')[0].files[0]; //get file name          
                const formData = new FormData();
                formData.append('file',image);
                formData.append('action','upload');

                $.ajax({
                    url : 'server.php',
                    method : 'post',
                    data : formData,
                    contentType : false,
                    processData :false,
                    success :function(response){
                        if(response == 'Okay'){
                            console.log("Success upload image");
                        }
                    },
                    error : function(xh,status,error){
                        if(error){
                            alert(error);
                        }
                    }
                })
            })

            $('#btn_confirm_add').on('click',function(){
                let name   =  $('#p_name').val();
                let brand  =  $('#p_brand').val();
                let price  =  $('#p_name').val();
                let remark =  $('#p_remark').val();

                $.ajax({
                    url : 'server.php',
                    method : 'post',
                    data : {
                        name,
                        brand,
                        price,
                        remark
                    }
                })
            })
        })
</script>