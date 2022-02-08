<?php
require_once "models/func.php";


$reg_errors = [];
$repeat_errors = [];
$missing = [];
$message = null;

if (isset($_POST['submit'])) {

    $users = getAllItem($connect, 'users');


    if (preg_match('/^([а-яё\s]+|[a-z\s]+)$/iu', $_POST['first_name'])) {
        $first_name = trim(strip_tags($_POST['first_name']));
    } else {
        $reg_errors['first_name'] = 'Пожалуйста, введите ваше имя!';
    }

    if (preg_match('/^([а-яё\s]+|[a-z\s]+)$/iu', $_POST['last_name'])) {
        $last_name = trim(strip_tags($_POST['last_name']));
    } else {
        $reg_errors['last_name'] = 'Пожалуйста, укажите вашу фамилию!';
    }

    if (preg_match('/^([а-яё\s]+|[a-z\s]+)$/iu', $_POST['login'])) {
        $login = trim(strip_tags($_POST['login']));
        foreach ($users as $user) {
            if ($login == $user['login']) {
                $repeat_errors['login'] = 'Этот логин уже зарегистрирован. Попробуйте выбрать другой логин.';
            }
        }
    } else {
        $reg_errors['login'] = 'Пожалуйста, укажите желаемый вами логин!';
    }

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = trim(strip_tags($_POST['email']));
        foreach ($users as $user) {
            if ($email == $user['email']) {
                $repeat_errors['email'] = 'Этот адрес электронной почты уже зарегистрирован.';
            }
        }
    } else {
        $reg_errors['email'] = 'Пожалуйста, введите корректный адрес электронной почты!';
    }

    if (preg_match('/^(\w*(?=\w*\d)(?=\w*[a-z])(?=\w*[A-Z])\w*){6,}$/', $_POST['password'])) {
        if ($_POST['password'] === $_POST['repeat_password']) {
            $password = trim(strip_tags($_POST['password']));
            $password = md5($password);
        } else {
            $reg_errors['repeat_password'] = 'Ваш пароль не соответствует подтвержденному паролю!';
        }
    } else {
        $reg_errors['password'] = 'Пожалуйста, введите корректный пароль!';
    }



    if (empty($reg_errors) && empty($repeat_errors) && empty($missing)) {

        addNewUser($connect, 'users', $first_name, $last_name, $login, $email, $password);
        $message = '<div class="alert alert-success"><h3>Спасибо!</h3>
                      <p>Благодарим за регистрацию! Теперь вы сможете войти на сайт и получить доступ к его содержимому.</p></div>';

    }
}