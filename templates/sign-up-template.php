<?php
require_once "lib/db-connection.php";
$title = $_SERVER['PHP_SELF'];
if(isset($_POST['email'])) {
    $to = $_POST['email']; 
    // емайл получателя

    $subject = "Young minds of Russia!"; 
    // тема письма 

    $message = "Hello, this is the company Alexanders-Production,
                If you are reading this letter means You are in large debts, congratulations to you!
                You have 5 days to transfer money to our account, thanks for understanding, otherwise we will come to You
                and we'll write nasty things in the Elevator! All the best and see you soon:)"; 
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
    <button class="button-sign-up" data-toggle="modal" data-target="#popup">Subscibe now</button>
</div>

<!-- POPUP WINDOW -->
<div class="modal" id="popup">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
    <form class="popup-sign" action="" method="post">
        <h4 class="popup-title text-center">Signup to <br> Newsletter</h4>
        <div class="popup-input text-center">
                <input type="text" name="login" placeholder="YOUR NAME">
            </div>
            <div class="popup-mail text-center">
                <input type="e-mail" name="email" placeholder="YOUR E-MAIL ADRESS">
            </div>
            <div class="popup-sub text-center"><button class="button-sign-up">Subscibe now</button></div>
    </form>
    </div>
  </div>
</div>