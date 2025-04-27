<?php
require_once '../shared/connection.php';
$search_value = $_GET['search'];

$statement = $connection->prepare('SELECT * FROM tbl_news WHERE title LIKE :search');

$statement->execute([
    'search' => "%$search_value%"
]);

if ($statement->rowCount() > 0) {
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($rows as $row) {
        echo '
                <div class="col-4">
                    <figure>
                        <a href="news-detail.php?id='.$row['id'].'">
                            <div class="thumbnail">
                                <img width="350" height="200" src="../admin/assets/news/'.$row['thumbnail'].'" alt="">
                            </div>
                            <div class="detail">
                                <h3 class="title">'.$row['title'].'</h3>
                                <div class="date">'.$row['created_at'].'</div>
                                <div class="description">
                                    '.$row['description'].'
                                </div>
                            </div>
                        </a>
                    </figure>
                </div>
            ';
    }
}
