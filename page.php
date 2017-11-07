<?php
include( 'admin-part/db.php' );
include('admin-part/send_news.php');

function getContent($alias){
    global $connection;
    $sql_result = mysqli_query($connection, "SELECT id FROM news WHERE link ='".$alias."'");
    $result = mysqli_fetch_assoc($sql_result);
    //header ('location : /page.php?page='.$result['id']);
    //var_dump($result);

    return $result;


}
$id_page = getContent($_SERVER['REQUEST_URI']);
//var_dump($id_page);
if(!is_null($id_page)) {

    $page_info_sql = mysqli_query($connection, "SELECT * FROM news WHERE id = '$id_page[id]'");
    $page_info = mysqli_fetch_assoc($page_info_sql);
    ?>
    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title><?= $page_info[ 'meta-title' ] ?></title>
    <meta name="description" content="<?= $page_info[ 'meta-description' ] ?>">
    <!-- Bootstrap -->
    <link href="../style/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/font-awesome.min.css">
    <link href="../style/style.css" rel="stylesheet">
</head>
<body>
<div class="wraper wrapper__fon">
    <header id="header">
        <div class="mn clearfix">
            <div id="trigger" class="sandwich-menu">
                <div class="sw-topper"></div>
                <div class="sw-bottom"></div>
                <div class="sw-footer"></div>
            </div>
            <div class="box-telefons">
                <address class="tel tel__fixed"><a class="call-link" href="tel:+(86)181 2638 4301
                01">+(86) 181-2638-4301</a></address>
                <div class="box-icons box-icons__fixed">
                    <a href="#"><span class="theme__second__color">WeChat</span></a>
                </div>
            </div>
            <div class="mn_home">
                <a href="/"><img src="../img/logo-text.png" alt="logo"></a>
            </div>

            <div id="slider" class="overlay overlay-slidedown">
                <div id="trigger" class="sandwich-menu">
                    <div class="sw-topper"></div>
                    <div class="sw-bottom"></div>
                    <div class="sw-footer"></div>
                </div>
                <nav id="nav">
                    <img class="img-responsive img-text" src="../img/logo-text.png" alt="image-description">
                    <img class="img-responsive img-dragon" src="../img/logo-blue.png" alt="logo">
                    <ul>
                        <li><a href="/news.php">Статьи</a></li>
                        <li><a href="/about-us.php">О нас</a></li>
                        <li><a href="/photo.php">Фотоотчеты</a></li>
                        <li><a href="/delivery.php">Оплата и Доставка</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main id="main" class="wrapper__fon">
        <div class="container-fluid page-block">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 sidebar">
                    <h2>Категории</h2>
                    <ul>
                        <?php  foreach ($category as $cat ){?>
                            <li><a href="/news.php?sort=<?= $cat{'id'}?>" class="theme__second__color"><?= $cat['name'];?></a></li>
                        <?php }?>
                        <li><a href="/news.php" class="theme__second__color">Все новости</a></li>
                    </ul>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 page-content">
                    <div class="page_image-box">
                        <img src="<?= $page_info[ 'image' ] ?>" alt="image-description">
                    </div>
                    <h2 class="page_title theme__second__color"><?= $page_info[ 'title' ] ?></h2>
                    <p class="theme__second__color">
						<?= $page_info[ 'content' ] ?>
                    </p>
                    <div class="page-button">
                        <a class="btn btn-primary" href="../news.php">Назад</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer id="footer" class="clearfix footer__border">
        <section class="copyright">
            <span>© Redmiplus.com 2017</span>
            <a href="#" class="theme__second__color">info@redmiplus.com</a>
        </section>
        <div class="subscribe-box">
            <h2>Подписаться на прайс</h2>
            <form action="admin-part/send_news.php" id="subscribe" method="post">
                <input name="email_dispatch" type="text" placeholder="Ваш email">
                <button class="btn_send_dispath"
                        name="send_dispath"
                        type="submit"
                        value="dispath"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
            </form>
        </div>
        <div class="icons-block">
            <ul>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </footer>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- javascript for bootstrap -->
<script src="../js/bootstrap.js"></script>
<!--<script src="js/wow.min.js"></script>-->
<!--<script>new WOW().init();</script>-->
<script type="text/javascript" src="../js/simple-lightbox.min.js"></script>
<script type="text/javascript" src="../js/my_js.js"></script>
</body>
</html>
<?php } if ($id_page==null){?>
    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">
        <title>Redmiplus</title>
        <link href="style/bootstrap.css" rel="stylesheet">
        <link href="style/animate.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" href="style/font-awesome.min.css">
        <link rel="stylesheet" href="style/simplelightbox.css">
        <link href="style/style.css" rel="stylesheet">
    </head>
    <body>
    <div class="wraper wrapper__fon">
        <header id="header">
            <div class="mn clearfix">
                <div id="trigger" class="sandwich-menu">
                    <div class="sw-topper"></div>
                    <div class="sw-bottom"></div>
                    <div class="sw-footer"></div>
                </div>
                <div class="box-telefons">
                    <address class="tel tel__fixed"><a class="call-link" href="tel:+(86)181 2638 4301
                01">+(86) 181-2638-4301</a></address>
                    <div class="box-icons box-icons__fixed">
                        <a href="#"><span class="theme__second__color">WeChat</span></a>
                    </div>
                </div>
                <div class="mn_home">
                    <a href="/"><img src="/img/logo-text.png" alt="logo"></a>
                </div>

                <div id="slider" class="overlay overlay-slidedown">
                    <div id="trigger" class="sandwich-menu">
                        <div class="sw-topper"></div>
                        <div class="sw-bottom"></div>
                        <div class="sw-footer"></div>
                    </div>
                    <nav id="nav">
                        <img class="img-responsive img-text" src="/img/logo-text.png" alt="image-description">
                        <img class="img-responsive img-dragon" src="/img/logo-blue.png" alt="logo">
                        <ul>
                            <li><a href="/news.php">Статьи</a></li>
                            <li><a href="/about-us.php">О нас</a></li>
                            <li><a href="/photo.php">Фотоотчеты</a></li>
                            <li><a href="/delivery.php">Оплата и Доставка</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main id="main" class="wrapper__fon">
            <div class="container-fluid page-block">
                <div class="error-404">
                    <h1>Страница с таким именем не найдена. Воспользуйтесь меню или попробуйте ввести правильный адрес.</h1><?= $id_page['id'];?>
                </div>
            </div>
        </main>
        <footer id="footer" class="clearfix footer__border">
            <section class="copyright">
                <span>© Redmiplus.com 2017</span>
                <a href="#" class="theme__second__color">info@redmiplus.com</a>
            </section>
            <div class="subscribe-box">
                <h2>Подписаться на прайс</h2>
                <form action="admin-part/send_news.php" id="subscribe" method="post">
                    <input name="email_dispatch" type="text" placeholder="Ваш email">
                    <button class="btn_send_dispath"
                            name="send_dispath"
                            type="submit"
                            value="dispath"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                </form>
            </div>
            <div class="icons-block">
                <ul>
                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- javascript for bootstrap -->
    <script src="../js/bootstrap.js"></script>
    <!--<script src="js/wow.min.js"></script>-->
    <!--<script>new WOW().init();</script>-->
    <script type="text/javascript" src="../js/simple-lightbox.min.js"></script>
    <script type="text/javascript" src="../js/my_js.js"></script>
    </body>
    </html>
<?php }
?>

