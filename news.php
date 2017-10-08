<?php
include( 'admin-part/db.php' );
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>NEWS</title>
    <!-- Bootstrap -->
    <link href="style/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="style/font-awesome.min.css">
    <!-- Animaition -->
    <!--    <link href="style/animate.css" rel="stylesheet">-->
    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">-->
    <link href="style/style.css" rel="stylesheet">
</head>
<body>
<div class="wraper">
    <header id="header">
        <div class="mn">
            <div id="trigger" class="sandwich">
                <div class="sw-topper"></div>
                <div class="sw-bottom"></div>
                <div class="sw-footer"></div>
            </div>
            <div class="box-telefons">
                <span>+38 (098) 732-54-54</span>
                <span>+38 (067) 732-54-54</span>
            </div>
            <div class="mn_home">
                <a href="/"><img src="img/logo-text.png" alt="logo"></a>
            </div>

            <!-------- slidown_menu ---------->
            <div id="slider" class="overlay overlay-slidedown">
                <nav id="nav">
                    <img src="img/logo-blue.png" alt="image-description">
                    <ul>
                        <li><a href="http://localhost/work/news.php">Статьи</a></li>
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Фотоотчеты</a></li>
                        <li><a href="#">Оплата</a></li>
                        <li><a href="#">Доставка</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <section class="title-box">
            <h1>Телефоны из Китая</h1>
        </section>
    </header>
    <main id="main">
        <div class="container-fluid nesw_cntnr">
            <div class="row">
                <div class="col-lg-3 col-md-3 sidebar">
                    <h2>Категории</h2>
                    <ul>
                        <li><a href="#">Мобильные телефоны</a></li>
                        <li><a href="#">Мобильные телефоны</a></li>
                        <li><a href="#">Мобильные телефоны</a></li>
                        <li><a href="#">Мобильные телефоны</a></li>
                    </ul>
                </div>
                <div class="col-lg-8 col-md-8 news-block">
					<?php foreach ( $news as $news_post ) { ?>
                    <div class="news-box">
                        <div class="img-box">
                            <img class="img-responsive" src="<?= $news_post[ 'image' ]; ?>" alt="image-description">
                        </div>
                        <div class="news-content">
                            <h2><?= $news_post[ 'title' ]; ?></h2>
                            <p>
								<?= $news_post[ 'content' ]; ?>
                            </p>
                        </div>
                    </div>
					<?php } ?>
                    <!--				-->
                    <!--                    <div class="media">-->
                    <!--                        <a class="pull-left">-->
                    <!--                            <img class="media-object" src="-->
					<!--" height="200">-->
                    <!--                        </a>-->
                    <!--                        <div class="media-body">-->
                    <!--                            <h3 class="media-heading">-->
					<!--</h3>-->
                    <!--							-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    <hr>-->
                    <!--				-->
                </div>
            </div>
        </div>
    </main>
    <footer id="footer">


