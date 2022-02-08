<?php
header('Content-Type: text/html; charset=utf-8');


const PATH_BIG = "images/big/";
const PATH_SMALL = "images/small/";


const SERVER = "localhost";
const DB = "internet_shop";
const LOGIN = "root";
const PASS = "";


$connect = mysqli_connect(SERVER,LOGIN,PASS,DB) or die("Ошибка соединения с базой данных!");

mysqli_query($connect, "SET NAMES utf8");

