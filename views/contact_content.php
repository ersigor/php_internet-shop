<div class="feedback" id="blog">
    <div class="container">
        <div class="feedback_wraper">
            <div class="feedback_content">
                <h3 class="feedback-title">Отзывы</h3>
                <ul class="timeline">
                    <?php

                    $sql = "SET NAMES utf8";
                    $res = mysqli_query($connect, $sql);

                    $sql = "select * from feedbacks ORDER BY date DESC";
                    $res = mysqli_query($connect, $sql);

                    while ($data = mysqli_fetch_assoc($res)) :?>
                        <li>
                            <h4 class="head-text"><?= $data['author']?></h4>
                            <a href="#" class="float-right"><?= $data['date']?></a>
                            <p><?= $data['text']?></p>
                        </li>
                    <?php endwhile;?>

                </ul>
            </div>
        </div>
    </div>
</div>

<!-- contact form-->

<div class="contact_form">
    <div class="container">
        <div class="contact_grids">
            <div class="contact_grid_left">
                <div class="contact_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.3905851087434!2d-34.90500565012194!3d-8.061582082752993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18d90992e4ab%3A0x8e83c4afabe39a3a!2sSport+Club+Do+Recife!5e0!3m2!1sen!2sin!4v1478684415917" style="border:0"></iframe>
                </div>
            </div>
            <div class="contact_grid_right">
                <h2 class="contact_header">Свяжитесь с нами</span></h2>
                <form action="#" method="post">
                    <input class="input__field input__field--ichiro" type="text" id="input-25" name="name" placeholder="Ваше имя" required="" />
                    <input class="input__field input__field--ichiro" type="text" id="input-26" name="surname" placeholder="Ваша фамилия" required="" />
                    <textarea name="message" placeholder="Ваше сообщение..." required=""></textarea>
                    <input type="submit" name="submit_comment" value="Отправить">
                </form>
            </div>
            

        </div>
    </div>
</div>
