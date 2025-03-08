<?php
    include 'connection.php';
    function insert(){
        global $connection;
        if(isset($_POST['btn_submit'])){
            $name = $_POST['name'];
            $email= $_POST['email'];
            $password = md5($_POST['password']);

            $statement = $connection->prepare('INSERT INTO tbl_user (name,email,password) VALUES(?,?,?)');
            $statement->execute([$name,$email,$password]);

            if($statement){
                echo "Success Insert";
            }
        }
    }
    insert();