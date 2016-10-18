<?php
session_start();

ini_set('display_errors',1);
error_reporting(E_ALL);

//$name1 = 'Vasya';
//$name2 = 'Petya';
//$name3 = 'Sasha';

//echo 'Hi! '.$name1.'<br>';
//echo 'It is great!'.'<br>';
//echo 'Hi! '.$name2.'<br>';
//echo 'It is bad!'.'<br>';
//echo 'Hi! '.$name3.'<br>';
//echo '<hr>';
//
//function hello($name) {
//   echo $name;
//}
//
//hello ($name1);
//var_dump($data);
////======== конфиги сайта
include "config.php";
//var_dump ($config ['admin_login']);
////======== проверка уже когда-то залогиневшихся юзеров


// Константа - путь к нашей базе сообщений
define( "MESSAGES_TXT_PATH", 'database/database.txt');

// Наши функции - помощники
include "helpers.php";

// Роутинг - определяем $action
include "routing.php";

// Бизнес логика приложения - контролирует то, что происходит в программе
include "controller.php";
