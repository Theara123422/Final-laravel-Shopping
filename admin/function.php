<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php

require_once '../shared/connection.php';

function show_alert($title, $text, $info, $redirect = null)
{
    if ($redirect != null) {
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
    } else {
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

function upload_file($name, $destination)
{
    $file = $_FILES[$name]['name'];
    $file_name = date('YmdHis') . '-' . $file;

    if (!file_exists('./assets/' . $destination)) {
        mkdir('./assets/' . $destination, 755, 1);
    }
    move_uploaded_file($_FILES[$name]['tmp_name'], './assets/' . $destination . '/' . $file_name);

    return $file_name;
}

function register_user()
{
    global $connection;
    if (isset($_POST['btn_register'])) {
        $username = $_POST['username'];
        $email    = $_POST['email'];
        $password = $_POST['password'];
        $profile  = $_FILES['profile']['name'];

        if (empty($username) || empty($email) || empty($password) || empty($profile)) {
            show_alert('All field Cannot be null', 'You must input all the field', 'error');
            return;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        $image = upload_file('profile', 'profile');

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

function login_user()
{
    global $connection;

    if (isset($_POST['btn_login'])) {
        $name_email  =  trim($_POST['name_email']);
        $password    =  trim($_POST['password']);

        if (empty($name_email) || empty($password)) {
            show_alert('All field cannot be null', 'Please fill in all field', 'error');
            return;
        }

        $statement = $connection->prepare('SELECT * FROM tbl_user WHERE username = :name_email OR email = :name_email');

        $statement->execute([
            ':name_email' => $name_email
        ]);

        if ($statement->rowCount() > 0) {
            $row = $statement->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['id'] = $row['id'];

                show_alert('Login Success', 'You have logged in successfully', 'success', 'index.php');
            } else {
                show_alert('Login Failed', 'Invalid credentials', 'error');
            }
        } else {
            show_alert('Login Failed', 'Invalid credentials', 'error');
        }
    }
}
login_user();

function logout_user()
{
    if (isset($_POST['btn_logout'])) {
        session_start();
        // unset($_SESSION['id']);
        session_destroy();
    }
}
logout_user();

function create_logo()
{
    global $connection;

    if (isset($_POST['btn_confirm_add_logo'])) {
        $location   =  $_POST['location'];
        $thumbnail  =  upload_file('thumbnail', 'logo');

        if (empty($location)) {
            show_alert('All Field is required', 'You must input all field', 'error');
            return;
        }

        $statement   =   $connection->prepare('INSERT INTO tbl_logo (location, thumbnail) VALUES (:location, :thumbnail)');

        $statement->execute([
            ':location' => $location,
            ':thumbnail' => $thumbnail
        ]);

        if ($statement) {
            show_alert('Logo created success', 'You have created logo.', 'success', 'view-logo.php');
        } else {
            show_alert('Logo created failed', 'Database error', 'error');
        }
    }
}
create_logo();

function display_logo()
{
    global $connection;

    $statement  = $connection->prepare('SELECT * FROM tbl_logo ORDER BY id DESC');

    $statement->execute();

    if ($statement->rowCount() > 0) {
        $rows =  $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row) {
            
            echo '
                <tr>
                    <td>'.$row['id'].'</td>
                    <td><img width="80px" src="./assets/logo/'.$row['thumbnail'].'"/></td>
                    <td>'.ucwords($row['location']).'</td>
                    <td width="150px">
                        <a href=""class="btn btn-primary">Update</a>
                        <button type="button" remove-id="1" class="btn btn-danger btn-remove" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Remove
                        </button>
                    </td>
                </tr>
            ';
        }
    }
}

