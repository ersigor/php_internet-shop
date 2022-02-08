<div class="register">
    <div class="container">
        <h2>Регистрация</h2>
        <div class="login-form-grids">

            <?= $message?>

            <form action="#" method="post">

                <input type="text" name="first_name" placeholder="Имя..." required=" " >
                <?php if (isset($reg_errors['first_name'])) {
                    echo '<span class="help-block">' . $reg_errors['first_name'] . '</span>';
                }?>

                <input type="text" name="last_name" placeholder="Фамилия..." required=" " >
                <?php if (isset($reg_errors['last_name'])) {
                    echo '<span class="help-block">' . $reg_errors['last_name'] . '</span>';
                }

                ?>

                <input type="text" name="login" placeholder="Логин..." required=" " >
                <?php if (isset($reg_errors['login'])) {
                    echo '<span class="help-block">' . $reg_errors['login'] . '</span>';
                }
                if (isset($repeat_errors['login'])) {
                    echo '<span class="help-block">' . $repeat_errors['login'] . '</span>';
                }
                ?>

                <input type="email" name="email" placeholder="Email" required=" " >
                <?php if (isset($repeat_errors['email'])) {
                    echo '<span class="help-block">' . $repeat_errors['email'] . '</span>';
                }?>

                <input type="password" name="password" placeholder="Пароль" required=" " >
                <?php if (isset($reg_errors['password'])) {
                    echo '<span class="help-block">' . $reg_errors['password'] . '</span>';
                }?>

                <input type="password" name="repeat_password" placeholder="Подтверждение пароля" required=" " >
                <?php if (isset($reg_errors['repeat_password'])) {
                    echo '<span class="help-block">' . $reg_errors['repeat_password'] . '</span>';
                }?>
                <input type="submit" name="submit" value="Зарегистрироваться">


            </form>
        </div>
        <div class="register-home">
            <a href="index.php">Главная</a>
        </div>
    </div>
</div>
