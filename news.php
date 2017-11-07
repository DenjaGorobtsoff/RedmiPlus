<?php
include( 'admin-part/db.php' );
$find = array ('/news/','.html');

//SELECT c.* FROM ctegories c  INNER JOIN news n ON (n.category=c.id)
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>NEWS</title>
    <!-- Bootstrap -->
    <link href="style/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="style/font-awesome.min.css">
    <link href="style/style.css" rel="stylesheet">
    <script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
</head>
<body>
<div class="wraper wrapper__fon">
  <div class="wrapper-fon">
    <header id="header">
        <div class="mn clearfix">
            <div class="sandwich-menu">
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
                <a href="/"><img src="img/logo-text.png" alt="logo"></a>
            </div>

            <!-------- slidown_menu ---------->
            <div class="overlay overlay-slidedown">
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
        <div class="container-fluid nesw_cntnr">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 sidebar">
                    <h2>Категории</h2>
                    <ul>
                        <?php  foreach ($category as $cat ){?>
                        <li><a href="news.php?sort=<?= $cat{'id'}?>" class="theme__second__color"><?= $cat['name'];?></a></li>
                        <?php }?>
                        <li><a href="/news.php" class="theme__second__color">Все новости</a></li>
                    </ul>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 news-block">
			              <?php foreach ( $news as $news_post ) { ?>
                    <div class="news-box clearfix">
                        <div class="img-box">
                            <img class="img-responsive" src="<?= $news_post[ 'image' ]; ?>" alt="image-description">
                        </div>
                        <div class="news-content theme__second__color">
                            <h2><a href="page.php?page=<?=$news_post['id'];?>"><?= $news_post[ 'title' ]; ?></a></h2>
                            <p>
								<?=$content = mb_substr($news_post[ 'content' ], 0, 450).' ...';?>
                            </p>
                        </div>
                        <?php  if(isset($_COOKIE['admin'])){?>
                            <div class="btn-admin">
							<button class="btn btn-primary" data-toggle="modal" data-target="#myModal<?=$news_post[ 'id' ];?>">Редактировать</button>
                            <a class="btn btn-danger " href="admin-part/send_news.php?delete=<?= $news_post['id']; ?>">Удалить</a>
							<div class="modal fade" id="myModal<?=$news_post[ 'id' ];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
								    <div class="modal-content">
								      	<div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									        <h4 class="modal-title" id="myModalLabel">Редактирование новости</h4>
								      	</div>
										    <div class="modal-body">
										      	<form action="admin-part/send_news.php" method="post" enctype="multipart/form-data">
													<div class="form-group">
														<label for="exampleInputEmail1">Заголовок</label>
														<input type="text" class="form-control"  placeholder="Заголовок" name="title" value="<?= $news_post['title']; ?>">

													</div>
													<div class="form-group">
														<label for="exampleInputPassword1">Текст</label>
														<textarea type="text" id="editor2" class="form-control content_news" style="height: 160px" placeholder="" name="content_redact" ><?=$news_post['content'];?></textarea>
													</div>
													<div class="form-group">
														<label for="exampleInputPassword1">Категория</label>
														<select class="form-control" name="select_categorie">
														  <option></option>
														  <option value="1">Новости Китая</option>
														  <option value="2">Новости электроники</option>
														  

														</select>
													</div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Title</label>
                                                        <input type="text" class="form-control"  placeholder="" name="meta_title" value="<?= $news_post['meta-title'];?>">

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Decription</label>
                                                        <input type="text" class="form-control"  placeholder="" name="meta_description" value="<?= $news_post['meta-description'];?>">

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Link</label>
                                                        <input type="text" class="form-control"  placeholder="" name="good_link" value="<?=  str_replace($find,'',$news_post['link']);?>">

                                                    </div>
													<div class="form-group">
														<label for="exampleInputPassword1">Картинка</label>
														<input type="file" class=""  name="image">
													</div>
										    </div>
								      	<div class="modal-footer">
										        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
										        <button type="submit" name='news_redact_btn' class="btn btn-primary" value="<?= $news_post['id']; ?>">Редактировать</button>
										    </div>
										</form>
									</div>
								</div>
							</div>
						</div>
                        <?php }?>
				    </div>
                    <?php } ?>
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
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
 
           
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
   CKEDITOR.replaceAll();

  
  

    CKEDITOR.editorConfig = function( config ) {
        config.toolbarGroups = [
            { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
            { name: 'clipboard', groups: [ 'undo', 'clipboard' ] },
            { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
            '/',
            { name: 'forms', groups: [ 'forms' ] },
            { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
            { name: 'links', groups: [ 'links' ] },
            { name: 'insert', groups: [ 'insert' ] },
            '/',
            { name: 'styles', groups: [ 'styles' ] },
            { name: 'colors', groups: [ 'colors' ] },
            { name: 'tools', groups: [ 'tools' ] },
            { name: 'others', groups: [ 'others' ] },
            { name: 'about', groups: [ 'about' ] }
        ];

        config.removeButtons = 'Form,Checkbox,Radio,TextField,Textarea,Button,HiddenField,PageBreak,About';
    };
    $(document).ready(function(){
        $.fn.modal.Constructor.prototype.enforceFocus = function () {
            modal_this = this;
            $(document).on('focusin.modal', function (e) {
                if (modal_this.$element[0] !== e.target && !modal_this.$element.has(e.target).length
                    // add whatever conditions you need here:
                    &&
                    !$(e.target.parentNode).hasClass('cke_dialog_ui_input_select') && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_text')) {
                    modal_this.$element.focus()
                }
            })
        };
    });
</script>
<!-- javascript for bootstrap -->
<script src="js/bootstrap.js"></script>
<!--<script src="js/wow.min.js"></script>-->
<!--<script>new WOW().init();</script>-->
<script type="text/javascript" src="js/simple-lightbox.min.js"></script>
<script type="text/javascript" src="js/my_js.js"></script>
</body>
</html>
