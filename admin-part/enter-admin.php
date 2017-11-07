<?php 
include ('db.php');

?>

<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href="../style/style.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../style/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <!-- numbers -->

    <!-- Animaition -->
    <link href="css/animate.css" rel="stylesheet">

    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>

    <!--icons for http://fontawesome.io-->
    <script src="https://use.fontawesome.com/0f37af264c.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title>Вход в Админку</title>
</head>

<body style="background:white;">


<div class="container admin-enter" style="width:300px;">
    <form method="get" action="send_news.php">
        <div class="form-group">
            <label for="exampleInputEmail">Логин</label>
            <input type="login" class="form-control"  placeholder="Логин" name="login">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword">Пароль</label>
            <input type="password" class="form-control"  placeholder="Пароль" name="password">
        </div>
        <button style="width: 100%" name="btn_enter_admin" type="submit" value="enter" class="btn btn-success">Вход</button>
       

    </form>
</div>
