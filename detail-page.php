<?php 

$title = "Detail-Page";

require_once "lib/template.php";

$scripts = '<script src="js/popup.js"></script>';

$page_content = include_template("templates/detail-page-template.php", []);
$layout_template = include_template("templates/layout.php", ['content' => $page_content, 'title' => $title, 'scripts' => $scripts]);

echo $layout_template;
