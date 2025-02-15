<?php 
    include 'connection.php';
    $action = $_POST['action'];

    if($action == 'upload'){
        $image = $_FILES['file']['name'];
        $destination  = './upload';

        if(!file_exists($destination)){
            mkdir('./upload',0777,true);
        }

        $filename = time() .'-'. $image;

        $path = './upload/'.$filename;

        $result = move_uploaded_file($_FILES['file']['tmp_name'],$path);

        if($result){
            echo $filename;
        }
        
    }

    if($action == "add"){
        $name    = $_POST['name'];
        $brand   = $_POST['brand'];
        $price   = $_POST['price'];
        $remark  = $_POST['remark'];
        $image   = $_POST['image'];

        $sql_insert = "INSERT INTO tbl_car (name, brand, price, remark, image) VALUES ('$name','$brand','$price','$remark','$image')";

        $result     = $connection -> query($sql_insert);

        if($result){
            echo 'success';
        }
        else{
            echo 'error';
        }
    }


    if($action == 'read'){
        $sql_select = "SELECT * FROM tbl_car WHERE 1 ORDER BY id DESC";

        $result  =  $connection -> query($sql_select);

        while($row = mysqli_fetch_assoc($result)){
            echo '
                <tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['brand'].'</td>
                    <td>'.$row['price'].'</td>
                    <td>'.$row['remark'].'</td>
                    <td>
                        <img src="./upload/'.$row['image'].'" alt="'.$row['image'].'" width="80" height="80">
                    </td>
                    <td>
                        <button class="btn btn-outline-warning">Update</button>
                        <button class="btn btn-outline-danger">Delete</button>
                    </td>
                </tr>
            ';
        }
    }