<?php
$connection = mysqli_connect('127.0.0.1','mysql','mysql','china_phone');

if ($connection == false)
{
    echo 'Не подключилось надо искать проблему <br>';
    echo mysqli_connect_error();
    die();
}


$news_q = mysqli_query($connection, "SELECT * FROM `news`" ); //Делаем массив из данных с БД

$news = array();
while($all_news = mysqli_fetch_assoc($news_q))
{
    $news[] = $all_news;

}