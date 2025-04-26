<?php
include('header.php');

$news_id = $_GET['id'];

$statement = $connection->prepare('SELECT * FROM tbl_news WHERE id = :id');

$statement->execute([
    ':id' => $news_id
]);

if ($statement->rowCount() > 0) {
    $row = $statement->fetch(PDO::FETCH_ASSOC);
}

$related_new = $connection->prepare('SELECT * FROM tbl_news WHERE id <> :id AND category = :category ORDER BY id DESC');

$related_new->execute([
    ':id' => $news_id,
    ':category' => $row['category']
]);

if ($related_new->rowCount() > 0) {
    $rows = $related_new->fetchAll(PDO::FETCH_ASSOC);
}
?>
<main class="news-detail">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="main-news">
                        <div class="thumbnail">
                            <img src="../admin/assets/news/<?php echo $row['banner'] ?>">
                        </div>
                        <div class="detail">
                            <h3 class="title">
                                <?php echo $row['title'] ?>
                            </h3>
                            <div class="date"><?php echo $row['created_at'] ?></div>
                            <div class="description">
                                <?php echo $row['description'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="relate-news">
                        <h3 class="main-title">Related News</h3>
                        <?php
                        foreach ($rows as $data) {
                            echo '
                                <figure>
                                    <a href="news-detail.php?id='.$data['id'].'">
                                        <div class="thumbnail">
                                            <img width="350" height="200" src="../admin/assets/news/'.$data['thumbnail'].'" alt="">
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">'.$data['title'].'</h3>
                                            <div class="date">'.$data['created_at'].'</div>
                                            <div class="description">
                                                '.$data['description'].'
                                            </div>
                                        </div>
                                    </a>
                                </figure>
                                ';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('footer.php'); ?>