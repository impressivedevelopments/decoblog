<?php
require_once "lib/db-connection.php";
$title = $_SERVER['PHP_SELF'];
if(isset($_POST['email'])) {
    $to = $_POST['email']; 
    // емайл получателя

    $subject = "Проверка отправки писем"; 
    // тема письма 

    $message = "Здравствуйте
                Если вы читаете это письмо значит все ок
                Почтовый робот"; 
    // текст сообщения 

    $mailheaders = "Content-type:text/plain;charset=windows-1251rn"; 
    // почтовый заголовок, указывает формат письма - текстовый и кодировку

    $mailheaders .= "From: suncheus@yandex.ru"; 
    // почтовый заголовок, указывает емайл отправителя

    mail($to, $subject, $message, $mailheaders);
    // отправка письма
    header("location: $title");
    exit();
}
?>

<form class="sign-up" action="" method="post">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 my-auto"><h3>Signup to <br> Newsletter</h3></div>
        <div class="col-lg-4 col-md-4 col-sm-4 my-auto">
            <input type="text" name="login" placeholder="YOUR NAME">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 my-auto">
            <input type="e-mail" name="email" placeholder="YOUR E-MAIL ADRESS">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 my-auto"><button class="btn-block">Subscibe now</button></div>
    </div>
</form>
<div class="popup-button">
    <button class="button-sign-up">Subscibe now</button>
</div>

<!-- POPUP MENU -->
<div class="popup text-center hidden">
    <div class="popup-close"><h2>&times;<h2></div>
    <form class="popup-sign" action="" method="post">
        <div class="popup-title"><h5>Signup to <br> Newsletter</h5></div>
        <div class="popup-input">
            <input type="text" name="login" placeholder="YOUR NAME">
        </div>
        <div class="popup-mail">
            <input type="e-mail" name="email" placeholder="YOUR E-MAIL ADRESS">
        </div>
    </form>
</div>