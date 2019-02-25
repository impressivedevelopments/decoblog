<?php 
require_once "lib/db-connection.php";

$posts = $con->query("SELECT * FROM posts where id = '{$_GET['id']}'");
$post = $posts->fetch_assoc();

$lasts_posts = $con->query("SELECT * FROM posts LIMIT 4");

?>
<div class="row">
    <div class="col-lg-9">
        <div class="post-card white">
        <?php if($post['media'] != NULL): ?>
                <div class="post-card-image"> 
                    <img class="d-block w-100" src="<?= $post['media']; ?>" alt=""> 
                </div>
                <?php endif; ?>
            <div class="post-card-body">
                <div class="post-card-header">
                    <span class="wrap">
                    <?php if($post['media'] != NULL): ?>
                        <i class="fas fa-image fa-3x"></i>
                    <?php else: ?>
                        <i class="fas fa-pen-square fa-3x"></i>
                    <?php endif; ?>
                    </span>
                </div>
                <h6><?= $post['category']; ?></h6>
                <h3><?= $post['title']; ?></h3>
                <h6>
                    <i class="fas fa-user"></i>
                    <span class="author">
                        <?= $post['author']; ?> 
                    </span>
                    <i class="far fa-calendar-alt"></i>
                    <span>
                        <?= date('F.d.Y'); ?>
                    </span>
                </h6>
                <p><?= $post['description']; ?></p>
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
    <div class="col-lg-3">
        <div class="sidebar">
            <div class="input-group mb-2 mr-sm-2 search">
                <input type="text" class="form-control" placeholder="search">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>  
            <img class="d-block w-100" src="images/categories.png" alt="img">            
            <h4>categories</h4>
            <ul class="categories">
                <li>lifestyle <span>98</span></li>
                <li>audio <span>102</span></li>
                <li>gallery <span>83</span></li>
                <li>image <span>4</span></li>
                <li>standart <span>109</span></li>
                <li>staus <span>50</span></li>
                <li>video <span>102</span></li>
            </ul>
            <img class="d-block w-100" src="images/banner-2.png">
            <h4>latest post</h4>
            <ul class="nav last-posts">
                <?php foreach($lasts_posts as $last_post): ?>
                <li>
                    <div class="last-post-img">
                        <img alt="img">
                    </div>
                    <div class="last-post-info">
                        <h6><?= $last_post['title']; ?></h6>
                        <span><?= $last_post['date']; ?></span> <br/>
                        <span><?= $last_post['likes']; ?> likes</span>
                        <form method="POST" action="detail-page.php?id=<?= $last_post['id'] ?>">
                            <button class="post-card-button change" name="id"><i class="fas fa-angle-double-right"></i></button>
                        </form>
                    </div>                    
                </li>
                    
                <?php endforeach;?>
                
            </ul>
            <div class="sidebar-social">
                    <span class="flex">
                        <a href="https://dribbble.com/?/">
                            <i class="fab fa-dribbble"></i>
                        </a> 
                        <a href="https://www.facebook.com/">
                            <i class="fab fa-facebook-f"></i>
                        </a> 
                        <a href="https://twitter.com/">
                            <i class="fab fa-twitter"></i>
                        </a> 
                        <a href="https://www.pinterest.ru/">
                            <i class="fab fa-pinterest"></i>
                        </a> 
                    </span>
            </div>
            <div class="sidebar-slider">
                <div id="sidebarsliderControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="images/banner-2.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="images/banner-2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="images/banner-2.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#sidebarsliderControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#sidebarsliderControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <img class="d-block w-100" src="images/social.png">
        </div>
    </div>
</div>