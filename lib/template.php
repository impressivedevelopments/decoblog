<?php
function include_template($templatePath, $data) {

    extract($data);

    ob_start();
    require $templatePath;
    $html = ob_get_clean();

    return $html;
}