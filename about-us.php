<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow" >
    <!-- Bootstrap -->
    <link href="style/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="style/font-awesome.min.css">
    <link href="style/style.css" rel="stylesheet">
    <title>About Us</title>
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
                        <a class="img-text" href="/"><img class="img-responsive" src="img/logo-text.png" alt="image-description"></a>
                        <a class="img-dragon" href="/"><img class="img-responsive" src="img/logo-blue.png" alt="logo"></a>
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
            <section class="title-box">
                
                <p>
                    Наша компания предлагает купить телефоны, смартфоны из Китая оптом на выгодных условиях.
                    В чем наши преимущества перед конкурентами? Наш бизнес построен таким образом, чтобы он
                    полностью соответствовал потребностям покупателей:</p>

                    <p>Главный офис расположен в Гонконге, а его филиал в Шэньчжэне, что позволяет нам работать
                    напрямую с заводами-изготовителями и самыми крупными поставщиками, с которыми за
                    срок нашей деятельности мы наработали деловые отношения;</p>

                    <p>Мы занимаемся непосредственно только оптовыми поставками телефонов из Китая,
                    уделяя время и силы на то, чтобы наши клиенты получали только качественную продукцию
                    на максимально выгодных для обеих сторон условиях;</p>
                    <p>У нас быстрая доставка продукции в страны СНГ и по всему миру. Кроме работы с
                    поставщиками и изготовителями, мы успешно сотрудничаем с несколькими транспортными
                    компаниями;</p>
                    <p>Мы гарантируем качество каждого девайса независимо от количества оптовой партии. У нас
                    только оригинальный товар (ни каких копий и рефов);</p>
                    <p>Перед отправкой все устройства проверяются. Имеется возможность установки
                    программного обеспечения и прошивки.</p>
                    <p>Наши китайские партнеры имеют стаж работы в этой сфере свыше 8 лет. Для получения большей
                    информации и ответов на возникшие вопросы, предлагаем вам связаться с нами по контактам,
                    расположенным на сайте.
                </p>
            </section>
            <div class="container-fluid info-block">
                <div class="row">
                    <section class="col-lg-4 col-md-offset-0 col-md-4 col-sm-offset-2 col-sm-8 col-xs-12 info-box">
                        <div class="icon-box">
                            <img src="img/icons/2_2.png">
                        </div>
                        <div class="info_content-box">
                            <h2>Доставка</h2>
                            <p>
                                Успешное сотрудничество с несколькими транспортными компаниями дает возможность отправки товаров по всему миру
                            </p>
                        </div>
                    </section>
                    <section class="col-lg-4 col-md-offset-0 col-md-4 col-sm-offset-2 col-sm-8 col-xs-12 info-box">
                        <div class="icon-box">
                           <img src="img/icons/3-1.png">
                        </div>
                        <div class="info_content-box">
                            <h2>Прайс-лист</h2>
                            <p>
                                Ежедневный прайс в открытом доступе с наличием и ценами, с которым можно ознакомиться в любое время
                            </p>
                        </div>
                    </section>
                    <section class="col-lg-4 col-md-offset-0 col-md-4 col-sm-offset-2 col-sm-8 col-xs-12 info-box">
                        <div class="icon-box">
                            <img src="img/icons/1-1.png">
                        </div>
                        <div class="info_content-box">
                            <h2>Минимальные цены</h2>
                            <p>
                                Наша команда примет, соберет, проверит, упакует и отправит заказ с минимальной комиссией от цен фабрик (от 1% до 3%)
                            </p>
                        </div>
                    </section>
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
