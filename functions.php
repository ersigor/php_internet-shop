<?php


const SERVER = "localhost";
const DB = "test_db";
const LOGIN = "root";
const PASS = "";


$connect = mysqli_connect(SERVER,LOGIN,PASS,DB) or die("Ошибка соединения с базой данных!");

mysqli_query($connect, "SET NAMES utf8");



function init($connect) {

    $sql = "SELECT * FROM users";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = [];
        while($row = mysqli_fetch_assoc($result)) {
            $out[] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }

    mysqli_close($connect);
}

function delete_user($connect) {
    $id = $_POST['id'];
   
    $sql = "DELETE FROM users WHERE users.id = '$id'";


    if (mysqli_query($connect, $sql)) { 
        echo "delete";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
}

function update_user($connect) {
    $id = $_POST['id'];
    if (isset($_POST['name'])) {
       $name = $_POST['name'];}
    if (isset($_POST['surname'])){
        $surname = $_POST['surname'];}
    if (isset($_POST['phone'])){
        $phone = $_POST['phone'];}
    if (isset($_POST['email'])){
        $email = $_POST['email'];}  

    $sql = "UPDATE users SET name = '$name', surname = '$surname', phone = '$phone', email = '$email' WHERE users.id = '$id'";
    //$sql = "INSERT INTO users (name, surname, phone, email)
    //VALUES ('$name', '$surname', '$phone', '$email')";
    
    if (mysqli_query($connect, $sql)) {
        echo "1";
    } else {
        echo "Error updating record: " . mysqli_error($connect);
    }



}

function create_new_user($connect) {

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, surname, phone, email)
VALUES ('$name', '$surname', '$phone', '$email')";

    if (mysqli_query($connect, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }

}



