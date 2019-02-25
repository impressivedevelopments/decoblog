<?php
require_once "lib/db-connection.php";
$title = $_SERVER['PHP_SELF'];
if(isset($_POST['email'])) {
    $to = $_POST['email']; 
    // емайл получателя

    $subject = "Decoblog"; 
    // тема письма 

    $message = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
    <style>
      .button { 
        background: black; 
        padding: 15px;
        color: white;
        border: none;
      }
      a { text-decoration: none; }
      table {
        width: 100%;
        text-align: center;
      }
      table tr {
        width: 100%;
        height: 50px;
      }
    </style>
    </head>
    <body>
      <table>
        <thead>
          <tr>
            <th>Спасибо что подписались на новостную рассылку!</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <img src="https://akphoto1.ask.fm/461/707/639/1650003027-1qs3pk2-b10p9a0510n0t50/original/severus_snape_director_by_michelle_winerd6susv8.jpg">
            </td>
          </tr>
          <tr>
            <td><a href="http://decoblog/index.php" class="button">На главную страницу</a></td>
          </tr>
          
        </tbody>       
      </table>
    </body>
    </html>
    ';
    // текст сообщения 
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    // // почтовый заголовок, указывает формат письма - текстовый и кодировку

    mail($to, $subject, $message, $headers);
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