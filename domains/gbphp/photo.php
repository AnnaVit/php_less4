<?php
include_once __DIR__ . '\..\config\main.php';
include_once ENGINE_DIR . 'showGallery.php';

$id = $_GET['id'];
$image = getImg($id);

viewsInc($id);
//$sql = "UPDATE gallery SET views = views + 1 WHERE id = {$id}";
//считаем на стороне бд

include VIEWS_DIR . "/single_page.php";
