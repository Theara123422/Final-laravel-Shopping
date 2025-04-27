<?php include('header.php'); ?>
<main class="home" id="home">
    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            TRENDING NOW
                        </div>
                        <div class="content-right">
                            <marquee behavior="" direction="left">
                                <div class="text-news">
                                    <?php
                                    $text_news = display_trending_new('trend');
                                    foreach ($text_news as $text) {
                                        echo '<i class="fas fa-angle-double-right"></i> ';
                                        echo '<a href="news-detail.php?id=' . $text['id'] . '">' . $text['title'] . '</a> &ensp;';
                                    }
                                    ?>
                                </div>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="latest-news">
        <div class="container">
            <div class="row">
                <div class="col-8 content-left">
                    <?php
                    $topTrend = display_trending_new('topTrend');
                    echo '
                            <figure>
                                <a href="news-detail.php?id=' . $topTrend['id'] . '">
                                    <div class="thumbnail">
                                        <img width="730" height="415" src="../admin/assets/news/' . $topTrend['thumbnail'] . '" alt="">
                                        <div class="title">
                                            ' . $topTrend['title'] . '
                                        </div>
                                    </div>
                                </a>
                            </figure>
                        ';
                    ?>
                </div>
                <div class="col-4 content-right">
                    <?php
                    $trendingNews = display_trending_new('trend');

                    foreach ($trendingNews as $trendNews) {
                        echo '
                                <div class="col-12">
                                    <figure>
                                        <a href="news-detail.php?id=' . $trendNews['id'] . '">
                                            <div class="thumbnail">
                                                <img width="350" height="200" src="../admin/assets/news/' . $trendNews['thumbnail'] . '" alt="">
                                                <div class="title">
                                                    ' . $trendNews['title'] . '
                                                </div>
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                            ';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            SPORT NEWS
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="row">
                <?php
                display_new_by_category('sport');
                ?>
            </div>
        </div>
    </section>

    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            SOCIAL NEWS
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="row">
                <?php
                display_new_by_category('social');
                ?>
            </div>
        </div>
    </section>
    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            ENTERTAINMENT NEWS
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="row">
                <?php
                display_new_by_category('entertainment');
                ?>
            </div>
        </div>
    </section>
</main>
<?php include('footer.php'); ?>

<script>
    $(document).ready(function() {
        $('#searchbar').keyup(function() {
            setTimeout(() => {
                let searchValue = $('#searchbar').val();

                $.ajax({
                    url: 'search_news.php?search=' + encodeURIComponent(searchValue),
                    method: 'GET',
                    success: function(response) {
                        $('#home').html(`
                        <section class="trending">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content-trending">
                                            <div class="content-left">
                                                RESULT SEARCH
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="content">
                            <div class="container">
                                <div class="row">
                                    ${response}
                                </div>
                            </div>
                        </section>
                    `);
                    },
                    error: function() {
                        console.log('error searching');
                    }
                })
            }, 2000);
        });
    })
</script>