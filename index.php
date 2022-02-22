<?php 
require "server.php";
require "form_change.php"; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <table class="table">

</table>

<!--Добавление user-->
<button id="exampleModal" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Добавить
</button>

<!-- Форма добавления -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Добавление нового user</h5>
      </div>
      <div class="modal-body">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <form id="form_create"  method = "post" class="row g-3" >
  <div  class="col-md-6" id="name">
    <label for="inputEmail4" class="form-label" >Имя</label>
    <input type="text" class="form-control" id="inputname-users" placeholder="Ваше имя" name='name'>
  </div>
  <div class="col-md-6" id="surname">
    <label for="inputPassword4" class="form-label" >Фамилия</label>
    <input type="text" class="form-control" id="inputsurname-users" placeholder="Ваша Фамилия" name='surname'>
  </div>
  <div class="col-12" id="phone">
    <label for="inputAddress" class="form-label" >Телефон</label>
    <input type="text" class="form-control" id="inputphone-users" placeholder="Ваш телефон" name='phone'>
  </div>
  <div class="col-12" id="email">
  <label for="inputEmail4" class="form-label" >Email</label>
    <input type="email" class="form-control" id="inputEmail-users" placeholder="Ваш email" name='email'>
  </div>
  <div class="modal-footer">
        <button id="close_new_user_modal" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="new_user_save" type="submit" class="btn btn-primary">Save changes</button>
      </div>
   </form>
      </div>
      <div id="result"></div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
