<?php 
require_once "lib/template.php";

$page_content = include_template("templates/posts-template.php", []);
$layout_template = include_template("templates/layout.php", ['content' => $page_content]);

echo $layout_template;
