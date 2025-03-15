<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php

require_once '../shared/connection.php';

function register_user()
{
    global $connection;
    if (isset($_POST['btn_register'])) {
        $username = $_POST['username'];
        $email    = $_POST['email'];
        $password = $_POST['password'];
        $profile  = $_FILES['profile']['name'];

        if (empty($username) && empty($email) && empty($password) && empty($profile)) {
            show_alert('All field Cannot be null', 'You must input all the field', 'error');
            return;
        }

        $password = password_hash($password, PASSWORD_BCRYPT);

        $image = date('YmdHis') . '-' . $profile;
        move_uploaded_file($_FILES['profile']['tmp_name'], './assets/profile/' . $image);

        $statement = $connection->prepare('INSERT INTO tbl_user (username, email, password, profile) VALUES (:username, :email, :password, :profile)');
        $statement->execute([
            ':username' => $username,
            ':email' => $email,
            ':password' => $password,
            ':profile' => $image
        ]);

        if ($statement) {
            show_alert('User created', 'You register success', 'success', 'login.php');
        }
    }
}
register_user();

function show_alert($title, $text, $info, $redirect = null)
{
    if($redirect != null){
        echo "
            <script>
                $(document).ready(function(){
                    swal({
                        title: '$title',
                        text: '$text',
                        icon: '$info',
                    })
                    .then(()=>{
                        window.location.href = '$redirect'
                    });
                })
            </script>
        ";
    }
    else{
        echo "
            <script>
                $(document).ready(function(){
                    swal({
                        title: '$title',
                        text: '$text',
                        icon: '$info',
                    })
                })
            </script>
        ";
    }
}
