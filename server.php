<?php
header('Content-Type: text/html; charset=utf-8');
require "functions.php";

const SERVER = "localhost";
const DB = "test_db";
const LOGIN = "root";
const PASS = "";


$connect = mysqli_connect(SERVER,LOGIN,PASS,DB) or die("Ошибка соединения с базой данных!");

mysqli_query($connect, "SET NAMES utf8");
