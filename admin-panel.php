<?php
require_once "lib/db-connection.php";

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category = $_POST['category'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $date = date("Y-m-d H:i:s");

    $result = $con->query("INSERT INTO posts (category, title, author, description, date) 
                            values('$category', '$title', '$author', '$description', '$date')");

    header("location: admin-panel.php");
    exit();
};

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Admin Panel</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="admin-header">
            <h2>Admin Panel</h2>
            <img src="images/pattern.png" width="300" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 offset-1">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Add news</h3>
                </div>
                <form method="post" action="">
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="control-label">Title</label>
                                <input id="title" type="text" name="title" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="control-label">Author</label>
                                <input id="author" type="text" name="author" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="control-label">description</label>
                                <textarea id="description" type="text" name="description" class="form-control" rows="6" required></textarea>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="control-label">Category</label>
                                <select id="category" name="category" class="form-control">
                                    <option value="" selected></option>
                                    <option value="lifestyle">lifestyle</option>
                                    <option value="audio">audio</option>
                                    <option value="gallery">gallery</option>
                                    <option value="image">image</option>
                                    <option value="standart">standart</option>
                                    <option value="status">status</option>
                                    <option value="video">video</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="control-label">Add file</label>
                                <input id="file" accept="image/*" type="file" name="file" class="form-control-file">
                            </div>
                            <div class="form-group col-lg-3 offset-3 text-right">
                                <button id="add-news-to-db" class="btn btn-block btn-success" type="submit">Add</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    
        <div class="col-lg-4 offset-1 ">
            <div class="post-card white">
                <div class="post-card-image hidden"> 
                    <img class="d-block w-100" src="images/banner.jpg" alt=""> 
                </div>
                <div class="post-card-body">
                    <div class="post-card-header">
                        <span class="wrap">
                            <i class="fas fa-pen-square fa-3x"></i>
                            <!-- <i class="fas fa-image fa-3x"></i> -->
                        </span>
                    </div>
                    <h6 class="category">Category</h6>
                    <h3 class="title">Title</h3>
                    <h6>
                        <i class="fas fa-user"></i>
                        <span class="author">
                            Author 
                        </span>
                        <i class="far fa-calendar-alt"></i>
                        <span>
                            <?= date('F.d.Y'); ?>
                        </span>
                    </h6>
                    <p class="description">Description</p>
                    <a href="detail-page.php"><button class="post-card-button">Read More</button></a>
                </div>
                <div class="post-card-footer">
                    <span>
                        <i class="far fa-comments"></i>
                        <p>NO COMMENT</p>
                    </span>
                    <div class="social">
                        <span>
                            <i class="fab fa-dribbble"></i>
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-pinterest"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/add-new-post.js"></script>

</body>
</html>