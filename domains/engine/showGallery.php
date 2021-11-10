<?php

include_once ENGINE_DIR . 'lib.php';
/*function getGallery(string $source) : array
{
    return array_filter(
        scandir($source),
        function($item){
            return !is_dir($source . $item);
        }
    );

}*/
function getGalleryFiles()
{
    $sql = "SELECT * FROM gallery ORDER BY views DESC";

    return queryAll($sql);
}
function saveImg(string $path)
{
    $sql = "INSERT INTO gallery(path) VALUE ('$path')";

    return execute( $sql);

}
function getImg(int $id)
{
    $sql = "SELECT * FROM gallery WHERE id={$id}";
    return queryOne($sql);
}
function viewsInc($id){
    $sql = "UPDATE gallery SET views = views + 1 WHERE id = {$id}";
    return execute($sql);
}