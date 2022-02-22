<?php

$action = $_POST['action'];



require "functions.php";



switch ($action) {
    case 'init':
        init($connect);
        break;
    case 'delete_user':
        delete_user($connect);
        break;
    case 'update_user':
        update_user($connect);
        break;
    case 'create_new_user':
        create_new_user($connect);
        break;


}