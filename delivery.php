<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow">
    <!-- Bootstrap -->
    <link href="style/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="style/font-awesome.min.css">
    <link href="style/style.css" rel="stylesheet">
    <title>Delivery</title>
</head>
<body>
<div class="wraper wrapper__fon">
    <div class="wrapper-fon">
        <header id="header">
            <div class="mn clearfix">
                <div id="trigger" class="sandwich-menu">
                    <div class="sw-topper"></div>
                    <div class="sw-bottom"></div>
                    <div class="sw-footer"></div>
                </div>
                <div class="box-telefons">
                    <span class="tel">+(86) 181-263-843-01</span>
                    <div class="box-icons">
                        <a href="#"><span>WeChat</span></a>
                    </div>
                </div>
                <div class="mn_home">
                    <a href="/"><img src="img/logo-text.png" alt="logo"></a>
                </div>

                <!-------- slidown_menu ---------->
                <div id="slider" class="overlay overlay-slidedown">
                    <div id="trigger" class="sandwich-menu">
                        <div class="sw-topper"></div>
                        <div class="sw-bottom"></div>
                        <div class="sw-footer"></div>
                    </div>
                    <nav id="nav">
                        <img class="img-responsive img-text" src="img/logo-text.png" alt="image-description">
                        <img class="img-responsive img-dragon" src="img/logo-blue.png" alt="logo">
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
            <div class="container-fluid delivery-block">
                <div class="payment-box box__settings">
                    <h2>Оплата</h2>
                    <p>
                        Lorem Ipsum - это текст-"рыба", часто
                        используемый в печати и вэб-дизайне.
                        Lorem Ipsum является стандартной "рыбой"
                        для текстов на латинице с начала XVI века.
                        В то время некий безымянный печатник создал
                        большую коллекцию размеров и форм шрифтов,
                        используя Lorem Ipsum для распечатки образцов.
                    </p>
                </div>
                <div class="delivery-box box__settings">
                    <h2>Доставка</h2>
                    <p>
                        Lorem Ipsum - это текст-"рыба", часто
                        используемый в печати и вэб-дизайне.
                        Lorem Ipsum является стандартной "рыбой"
                        для текстов на латинице с начала XVI века.
                        В то время некий безымянный печатник создал
                        большую коллекцию размеров и форм шрифтов,
                        используя Lorem Ipsum для распечатки образцов.
                    </p>
                </div>
            </div>
        </main>
        <footer id="footer" class="clearfix footer__border">
            <section class="copyright">
                <span>© Redmiplus.com 2017</span>
                <a href="#">info@redmiplus.com</a>
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
</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="js/simple-lightbox.min.js"></script>
<script type="text/javascript" src="js/my_js.js"></script>
</body>
</html>
