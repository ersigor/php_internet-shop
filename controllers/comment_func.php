<?php
require_once "models/func.php";

if (isset($_POST['submit_comment'])) {

    



addnewcomment($connect, 'feedbacks', $_POST['name'], $_POST['surname'], $_POST['message']);
$message1 = '<div class="alert alert-success"><h3>Спасибо!</h3>
              <p>Благодарим за коммент</p></div>';}