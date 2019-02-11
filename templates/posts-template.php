<?php 
require_once "lib/db-connection.php";

$posts = $con->query("SELECT * FROM posts");

?>
<div class="posts">
    
    <div class="row">
        <?php foreach($posts as $post): ?>
        <div class="col-lg-3">
            <div class="post-card white">
                <?php if($post['media'] != "NULL"): ?>
                <div class="post-card-image"> 
                    <img class="d-block w-100" src="<?= $post['media']; ?>" alt=""> 
                </div>
                <?php endif; ?>
                <div class="post-card-body">
                    <div class="post-card-header">
                        <span class="wrap">
                        <?php if($post['media'] != "NULL"): ?>
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
                    <form method="POST" action="detail-page.php?id=<?=$post['id']?>"><button class="post-card-button" name="id">Read More</button></form>
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
        <?php endforeach; ?>
    </div>
</div>