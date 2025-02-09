<?php 
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
            echo 'Okay';
        }
        
    }