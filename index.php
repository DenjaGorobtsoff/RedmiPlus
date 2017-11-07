<?php
include ('admin-part/db.php');
include ('admin-part/send_news.php');

$image_path_sql = mysqli_query( $connection, "SELECT * FROM fotogallery ORDER BY id DESC LIMIT 8" );

$image_path = array();
while ( $all_img = mysqli_fetch_assoc( $image_path_sql ) ) {
    $image_path[] = $all_img;
}

?>
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
<div class="wraper">
    <div class="wrapper-fon">
        <header id="header">
            <div class="menu-box clearfix">
                <div class="sandwich-menu">
                    <div class="sw-topper white__theme-bg"></div>
                    <div class="sw-bottom white__theme-bg"></div>
                    <div class="sw-footer white__theme-bg"></div>
                </div>
                <span class="menu-title white__theme-text">Меню</span>
            </div>
            <div class="logo-box">
                <a class="img-dragon" href="/"><img class="img-responsive" src="img/logo-white.png" alt="logo"></a>
            </div>
            <div class="box-telefons box-telefons__absolute">
                <address class="tel-menu"><a class="call-link white__theme-text tel-font" href="tel:+86(181)263 843 01">+(86) 181-2638-4301</a></address>
                <div class="box-icons">
                    <a class="white__theme-text" href="#"><span class="white-font">WeChat</span></a>
                    <!--<a class="white__theme-text" href="#"><span>WhatsApp</span></a>-->
                </div>
            </div>
            <div id="sandwich" class="mn clearfix">
                <div class="sandwich-menu">
                    <div class="sw-topper"></div>
                    <div class="sw-bottom"></div>
                    <div class="sw-footer"></div>
                </div>
                <div class="box-telefons">
                    <address class="tel"><a class="call-link" href="tel:+86(181)263 843 01">+(86) 181-2638-4301</a></address>
                    <div class="box-icons">
                        <a href="#"><span>WeChat</span></a>
                        <!--<a href="#"><span>WhatsApp</span></a>-->
                    </div>
                </div>
                <div class="mn_home">
                    <a href="/"><img src="img/logo-text.png" alt="logo"></a>
                </div>
            </div>
            <div class="title-block">
                <h1>
                    Мобильные телефоны оптом
                    из Китая по низким ценам
                </h1>
                <h2>
                    Ваш надежный партнер
                </h2>
                <div class="btn_price"><a href="admin-part/send_news.php?price=receive">Скачать прайс
                        за <?= $name_prise[ 0 ].'.'.$name_prise[ 1 ].'.'.$name_prise[ 2 ]; ?></a></div>
            </div>
            <div class="overlay overlay-slidedown">
                <div class="sandwich-menu">
                    <div class="sw-topper"></div>
                    <div class="sw-bottom"></div>
                    <div class="sw-footer"></div>
                </div>
                <nav id="nav">
                    <a class="img-text" href="/"><img class="img-responsive" src="img/logo-text.png"
                                                      alt="image-description"></a>
                    <a class="img-dragon" href="/"><img class="img-responsive" src="img/logo-blue.png" alt="logo"></a>
                    <ul>
                        <li><a href="/news.php">Статьи</a></li>
                        <li><a href="/about-us.php">О нас</a></li>
                        <li><a href="/photo.php">Фотоотчеты</a></li>
                        <li><a href="/delivery.php">Оплата и Доставка</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main id="main">
            <div class="services-block clearfix">
                <div class="services_title-box fadeInUp wow animated">
                    <h2>
                        Преимущества
                    </h2>
                    <h3>
                        Наш бизнес построен таким образом, чтобы он полностью соответствовал потребностям клиента:
                    </h3>
                </div>
                <div class="wrapper-box">
                    <div class="service-box slideInLeft wow animated">
                        <div class="service-box_icon-box">
                            <img src="img/icons/flag.png">
                        </div>
                        <div class="service-box_text-box">
                            <h2>1. Главный офис расположен в Китае</h2>
                            <p>
                                Главный офис расположен в Гонконге, а его филиал в Шэньчжэне, что позволяет нам
работать напрямую с производителями и фабриками-изготовителями, с которыми за
срок нашей деятельности мы наработали деловые отношения.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="wrapper-box">
                    <div class="service-box slideInRight wow animated">
                        <div class="service-box_text-box">
                            <h2>2. Сотрудничество с транспортными компаниями</h2>
                            <p>
                                Кроме работы с производителями мы успешно сотрудничаем с крупнейшими
транспортными компаниями, делая поставки из Китая в Россию, Украину, Казахстан и
другие страны за максимально короткие сроки.
                            </p>
                        </div>
                        <div class="service-box_icon-box">
                            <img src="img/icons/delivery.png">
                        </div>
                    </div>
                </div>
                <div class="wrapper-box">
                    <div class="service-box slideInLeft wow animated">
                        <div class="service-box_icon-box">
                            <img src="img/icons/box.png">
                        </div>
                        <div class="service-box_text-box">
                            <h2>3. Только оптовые продажи</h2>
                            <p>
                                Мы узконаправленная компания, которая специализируется только на оптовых
продажах смартфонов и других электронных устройств, уделяя всё время и силы для
лидерства в данной области.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="wrapper-box">
                    <div class="service-box slideInRight wow animated">
                        <div class="service-box_text-box">
                            <h2>4. Качественный сервис</h2>
                            <p>
                                Наши русскоговорящие менеджеры имеют большой опыт работы, потому смогут дать
полную консультацию по всем интересующим вопросам от технических
характеристик товара до его отгрузки, оплаты и получения.
                            </p>
                        </div>
                        <div class="service-box_icon-box">
                            <img src="img/icons/tel.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="company-block clearfix">
                <div class="company-wrapper">
                    <div class="company_title-box slideInDown wow animated">
                        <h2>
                            Компания в цифрах
                        </h2>
                        <h3>
                            Наши клиенты доверяют нам
                            и поэтому зарабатывают вместе с нами
                        </h3>
                    </div>
                    <div class="company_content-box slideInRight wow animated ">
                        <h2>
                            3
                        </h2>
                        <h3>
                            года
                        </h3>
                        <h4>
                            успешной работы
                        </h4>
                    </div>
                    <div class="company_content-list clearfix">
                        <ul>
                            <li>
                                <h3>5000</h3>
                                <p>наименований товаров</p>
                            </li>
                            <li>
                                <h3>500+</h3>
                                <p>выполненных заказов</p>
                            </li>
                            <li>
                                <h3>90%</h3>
                                <p>повторных обращений</p>
                            </li>
                            <li>
                                <h3>1000+</h3>
                                <p>дней успешной работы</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="gallery-container">
                <div class="gallery clearfix">
                    <div class="gallery_title-box">
                        <h2>Фотоотчеты</h2>
                        <h3>Последние фотографии нашей работы</h3>
                    </div>
					<?php foreach ( $image_path as $image ) { ?>
                        <div class="gallery-photo">
                            <a href="img/fotogallery/<?= $image[ 'image-name' ]; ?>">
                                <div class="photo-layer"></div>
                                <div class="photo__settings">
                                    <img class="img-responsive" src="<?= $image[ 'image-path' ]; ?>"
                                         alt="image-description">
                                </div>
                            </a>
                        </div>
					<?php } ?>
                </div>
                <div class="btn_fotogallery">
                    <a href="photo.php" class="btn_move_fotogallery">Больше фото</a>
                </div>
            </div>
            <div class="title_contact">
                <h2>Контакты</h2>
                <h3>Связаться с нами можно по указанным номерам</h3>
            </div>
            <div class="bg-img">
                <div class="bg-img-wrapper">
                    <div class="contacts-block clearfix">
                        <div class="contacts_container">

                            <div class="contacts-box slideInLeft wow animated">
                                <address><a class="call-link contact-tel white__theme-text"
                                            href="tel:+86(181)263 843 01">+(86) 181-2638-4301</a></address>
                                <div class="contacts_icon-box">
                                    <a href="#"><span>WeChat</span></a>
                                </div>
                            </div>
                            <div class="contacts-box slideInRight wow animated">
                                <address><a class="call-link contact-tel white__theme-text"
                                            href="tel:+86(181)263 843 01">+(86) 132-6065-2155</a></address>
                                <div class="contacts_icon-box">
                                    <a href="#"><span>WhatsApp</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="contacts_title-box">
                            <h2 class="white__theme-text">
                                Задайте ваш вопрос и мы
                                свяжемся с вами в ближайшее время
                            </h2>
                        </div>
                    </div>
                    <div class="form-block">
                        <div class="form-container">
                            <form action="http://formspree.io/info@redmiplus.com" id="form" method="post">
                                <div class="left-column">
                                    <input name="name" type="text" required placeholder="Ваше имя и фамилия">
                                    <input name="phone" type="text" required
                                           placeholder="Номер WeChat \ WhathApp \ Telegram">
                                    <input name="email" type="text" required placeholder="Ваш email">
                                </div>
                                <div class="right-column">
                                    <textarea name="message" placeholder="Что вас интересует?"></textarea>
                                </div>
                                <button class="sending_form" name="btn_send_contact" type="submit"
                                        value="contact">Отправить
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer id="footer" class="clearfix">
            <section class="copyright">
                <span>© Redmiplus.com 2017</span>
                <a href="#">info@redmiplus.com</a>
            </section>
            <div class="subscribe-box">
                <h2>Подписаться на прайс</h2>
                <form action="admin-part/send_news.php" id="subscribe" method="post">
                    <input name="email_dispatch" type="email" placeholder="Ваш email">
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
<script src="js/wow.min.js"></script>
<script>new WOW().init();</script>
<script type="text/javascript" src="js/simple-lightbox.min.js"></script>
<script type="text/javascript" src="js/my_js.js"></script>
</body>
</html>