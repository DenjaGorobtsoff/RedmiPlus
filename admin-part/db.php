<?php
$connection = mysqli_connect('localhost','root','','news');

if ($connection == false)
{
    echo 'Не подключилось надо искать проблему <br>';
    echo mysqli_connect_error();
    die();
}
if (isset($_GET) && $_GET['sort']){  //Сортировка новостей по категориям
    $news_q = mysqli_query($connection, "SELECT * FROM `news` WHERE category='".$_GET['sort']."'" ); //Делаем массив из данных с БД

    $news = array();
    while($all_news = mysqli_fetch_assoc($news_q))
    {
        $news[] = $all_news;

    }
}else{
    $news_q = mysqli_query($connection, "SELECT * FROM `news`" ); //Делаем массив из данных с БД

    $news = array();
    while($all_news = mysqli_fetch_assoc($news_q))
    {
        $news[] = $all_news;

    }
}



$category_sql = mysqli_query($connection, "SELECT * FROM `ctegories`");

$category = array();
while($category_array = mysqli_fetch_assoc($category_sql)){
    $category[] = $category_array;
}
