<?php 
require_once "lib/template.php";

$scripts = '<script src="js/script.js"></script>';

$page_content = include_template("templates/posts-template.php", []);
$layout_template = include_template("templates/layout.php", ['content' => $page_content, 'scripts' => $scripts]);

echo $layout_template;
