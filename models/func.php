<?php

require_once "server/config.php";

echo "Hello!";

function getAllItem($connect, $db_table) {
    // вывод товаров из базы данных
    $db_query = null;
    $result = [];
    $sql = "select * from $db_table";
    $db_query = mysqli_query($connect, $sql);

    if (mysqli_num_rows($db_query) > 0) {
        while($row = mysqli_fetch_assoc($db_query)) {
            $result[] = $row;
        }
    }
    return $result;
}

function getItemById($connect, $id, $db_table) {
    $good = null;
    $sql = "select * from $db_table where id = $id";
    $db_query = mysqli_query($connect, $sql);
    $good = mysqli_fetch_assoc($db_query);

    return $good;
}

function addToCart($connect, $db_table, $product_id, $date_created, $quantity = 1, $user_session_id = null) {

    $prod_id = mysqli_real_escape_string($connect, $product_id);
    $date = mysqli_real_escape_string($connect, $date_created);
    $quantity = mysqli_real_escape_string($connect, $quantity);
    $user_id = mysqli_real_escape_string($connect, $user_session_id);

    $sql = "INSERT INTO $db_table (product_id, quantity, date_created, user_session_id) VALUES ('$prod_id', '$quantity', '$date', '$user_id')";

    $result = mysqli_query($connect, $sql);
    if (!$result) {
        die(mysqli_error($connect));
    }
    return true;
}

// обновление количества товаров в корзине
function updateCart($connect, $product_id, $quantity, $db_table) {
    $id = (int) $product_id;


    $count = mysqli_real_escape_string($connect, $quantity);

    $sql = "UPDATE $db_table SET quantity = $count WHERE product_id = $id";

    if (!mysqli_query($connect, $sql)) {
        die(mysqli_error($connect));
    }

    return true;

}

function foundItemInCart($connect, $product_id, $db_table) {
    $good = null;
    $id = (int) $product_id;
    $sql = "select * from $db_table where product_id = $id";
    $db_query = mysqli_query($connect, $sql);
    $good = mysqli_fetch_assoc($db_query);
    return $good;
}

function addNewUser($connect, $db_table, $first_name, $last_name, $login, $email, $password) {
    $first_name = mysqli_real_escape_string($connect, $first_name);
    $last_name = mysqli_real_escape_string($connect, $last_name);
    $login = mysqli_real_escape_string($connect, $login);
    $email = mysqli_real_escape_string($connect, $email);
    $password = mysqli_real_escape_string($connect, $password);

    $sql = "INSERT INTO $db_table (first_name, last_name, login, email, password) VALUES ('$first_name', '$last_name', '$login', '$email', '$password')";

    $result = mysqli_query($connect, $sql);
    if (!$result) {
        die(mysqli_error($connect));
    }
    return true;
}
/* Добавление коммента */
function addnewcomment($connect, $db_table, $name, $surname,$message) {
     $name = mysqli_real_escape_string($connect, $name);
     $message = mysqli_real_escape_string($connect, $message);
     $sql = "INSERT INTO $db_table (author, text, date ) VALUES ('$name $surname', '$message',now())";
     $result = mysqli_query($connect, $sql);
    if (!$result) {
        die(mysqli_error($connect));
    }
    return true;
}


