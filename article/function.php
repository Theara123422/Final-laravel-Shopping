<!-- @import jquery & sweet alert  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
require_once '../shared/connection.php';

function display_logo_article($location)
{
    global $connection;
    $statement = $connection->prepare('SELECT thumbnail FROM tbl_logo WHERE location = :location ORDER BY id DESC LIMIT 1');

    $statement->execute([
        ':location' => $location
    ]);

    if ($statement->rowCount() > 0) {
        $row = $statement->fetch(PDO::FETCH_ASSOC);
    }
    return $row['thumbnail'];
}

function display_new_by_category($category)
{
    global $connection;

    $statement = $connection->prepare(
        '
            SELECT * FROM tbl_news WHERE category = :category ORDER BY id DESC LIMIT 3
        '
    );

    $statement->execute([
        ':category' => $category
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
                            <div class="title">
                                '.$row['title'].'
                            </div>
                            </div>
                        </a>
                    </figure>
                </div>
            ';
        }
    }
}
function display_trending_new($type){
    global $connection;

    $statement = $connection->prepare('SELECT * FROM tbl_news ORDER BY views DESC LIMIT 3');

    $statement->execute();

    if($statement->rowCount() > 0){
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        if($type == 'topTrend'){
            return $rows[0];
        }
        elseif($type == 'trend'){
            return array_splice($rows,1);
        }
    }
}
