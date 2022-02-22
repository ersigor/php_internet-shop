let users = {};
let out;



//инициализация 
function init() {
    $.post("core.php", 
            {"action":"init"
            }, usersOut);
    
    
    
}
function usersOut(data){
  users = JSON.parse(data);
  console.log(users);
  render(users);
}

function render() {
    // вывод пользователей на страницу
    
    out = '<tbody class="table_> <thead> <tr> <th scope="col">#</th> <th scope="col">Имя</th> <th scope="col">Фамилия</th><th scope="col">Телефон</th><th scope="col">email</th> <th scope="col"></th></th></tr></thead></tbody>';
    for (let i=0;i<users.length;i++) {
        out += '<tbody class="table_>';
        out += '<tr>';
        out += '<th scope="row">1</th>';
        out += '<td>'+users[i].name+'</td>';
        out += '<td>'+users[i].surname+'</td>';
        out += '<td>'+users[i].phone+'</td>';
        out += '<td>'+users[i].email+'</td>';
        out += '<td><div class="d-grid gap-2">';
        out += '<button data-id='+users[i].id+' class="btn btn-primary change"  type="button">Редактировать</button>';
        out += '<button data-id='+users[i].id+' class="btn btn-primary delete"  type="button">Удалить</button>';
        out += '</div>';
        out += '</td>';
        out += '</tr>';
        out += '</tbody>';  
    }
    $('.table').html(out);
    $('.change').on('click',change_);
    $('.delete').on('click',delete_);
}
//изменение user
function change_() {
  let id = $(this).attr('data-id');
  $('#exampleModal2').modal('show');
      $('#change_user').submit(function(event) {
        event.preventDefault();
  var name=document.getElementById('inputname-users_').value;
  var surname=document.getElementById('inputsurname-users_').value;
  var phone=document.getElementById('inputphone-users_').value;
  var email=document.getElementById('inputEmail-users_').value;
  for (let i=0;i<users.length;i++) {
    if (id==users[i].id) {
      users[i].name=name;
      users[i].surname=surname;
      users[i].phone=phone;
      users[i].email=email;
                          }
                                    }
      render(users);
      $.post("core.php",
      { "action" : "update_user",
        "id" : id,
        "name" :   $("#name_change > input").val(),
        "surname" : $('#surname_change > input').val(),
        "phone" : $('#phone_change > input').val(),
        "email" : $('#email_change > input').val()
        });
        $('#exampleModal2').modal('hide');
      });
      
}
  


//удаление user
function delete_() {
  console.log(out);
  let id = $(this).attr('data-id');
  console.log(id);
      for (let i=0;i<users.length;i++) {
        if (id==users[i].id) {
          console.log(users[i]);
          users.splice(i,1);
          render(users);}
        console.log(users);
        $.post("core.php",
    { "action" : "delete_user",
      "id" : id
      });
    }
} 
$('#form_create').submit(function(event) {
  // $('#modal') – модальное окно, которое нужно открыть
  event.preventDefault();
  
  var name=document.getElementById('inputname-users').value;
  var surname=document.getElementById('inputsurname-users').value;
  var phone=document.getElementById('inputphone-users').value;
  var email=document.getElementById('inputEmail-users').value;
  console.log(users.length-1);
  var id = users[(users.length-1)].id;
  id++;
  let newuser= {
    id: id,
    name: name,
    surname: surname,
    phone: phone,
    email: email
  }
  users.push(newuser);
  render(users);
  $.post("core.php",
  {
  "action" : "create_new_user",
  "name" :   $("#name > input").val(),
  "surname" : $('#surname > input').val(),
  "phone" : $('#phone > input').val(),
  "email" : $('#email > input').val()},
  );
  
  $('#exampleModal1').modal('hide');
});
//кнопка закрытия модального окна добавления нового юзера
$('#close_new_user_modal').click(function() {
  $('#exampleModal1').modal('hide');
});
//кнопка открытия модального окна добавления нового юзера
$('#exampleModal').click(function() {
  $('#exampleModal1').modal('show');
});
//кнопка закрытия модального окна изменения нового юзера
$('#close_new_user_modal_change').click(function() {
    $('#exampleModal2').modal('hide');
});

$(document).ready(function () {
     init();

});



