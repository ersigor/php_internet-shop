<?php

// читать json файлы
$json = file_get_contents('../goods.json');
$json = json_decode($json, true);

//  письмо
$message = '';
$message .= '<h1>Заказ в магазине</h1>';
$message .= '<p>Телефон: ' . $_POST['ephone'] . '</p>';
$message .= '<p>Почта: ' . $_POST['email'] . '</p>';
$message .= '<p>Клиент: ' . $_POST['ename'] . '</p>';

$cart = $_POST['cart'];
$sum = 0;

foreach ($cart as $id => $quantity) {
    $message .= $json[$id]['title'] . '----';
    $message .= $quantity . '----';
    $message .= $quantity * $json[$id]['price'];
    $message .= '<br>';
    $sum += $quantity * $json[$id]['price'];
}
$message .= 'Всего ' . $sum;
print_r($message);

$to = 'annushka-pr@mail.ru' . ',';
$to .= $_POST['email'];
$spectext = '<!doctype HTML><html><head><title>Заказ</title></head><body>';
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$m = mail($to, 'Заказ в магазине', $spectext . $message . '</body></html>');

if ($m) {
    echo 1;
} else {
    echo 0;
}

