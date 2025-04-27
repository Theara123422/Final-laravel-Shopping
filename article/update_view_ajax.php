<?php 
    require_once '../shared/connection.php';
    $news_id = $_POST['id'];

    $statement = $connection -> prepare('UPDATE tbl_news SET views = views + 1 WHERE id = :id');

    $status = $statement->execute([
        ':id' => $news_id
    ]);

    if($status){
        echo 'Success update views';
    }

