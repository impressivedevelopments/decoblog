<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Bodybuilding Blog</title>
</head>
<body>

    <!-- HEADER -->
<header class="header">
    <?= include_template("templates/header-template.php", []) ?>
</header> 

    <!-- SLIDER -->
<div class="slider">
    <?= include_template("templates/slider-template.php", []) ?>
</div>
    
    <!-- SGIN-UP -->
<form class="sign-up">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 my-auto"><h3>Signup to <br> Newsletter</h3></div>
            <div class="col-lg-4 my-auto"><input type="text" placeholder="YOUR NAME"></div>
            <div class="col-lg-4 my-auto"><input type="e-mail" placeholder="YOUR E-MAIL ADRESS"></div>
            <div class="col-lg-2 my-auto"><button class="btn-block">Subscibe now</button></div>
        </div>
    </div>
</form>

    <!-- POSTS -->
<div class="container-fluid">
    <?= $content; ?>
</div>

    <!-- ABOUT US -->
<section class="about">
    <?= include_template("templates/about-template.php", []) ?>
</section>

    <!-- FOOTER -->
<footer class="footer text-center">
    <div class="container">
        &copy;2015 copyright .all right reserved by awesome theme &nbsp;&nbsp; | <a href="#">terms policy</a> | <a href="#">disclaimer</a>
    </div>
</footer>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
