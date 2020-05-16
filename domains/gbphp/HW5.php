<?php

include_once __DIR__ . '\..\config\main.php';
include_once ENGINE_DIR . 'showGallery.php';
include_once ENGINE_DIR . 'fileUpload.php';
include_once ENGINE_DIR . 'base.php';
include VENDOR_DIR . 'funcImgResize.php';

/*$dbConfig = include CONFIG_DIR . 'db.php';

$conn = mysqli_connect(
    $dbConfig["host"],
    $dbConfig["user"],
    $dbConfig["pass"],
    $dbConfig["db"]
);*/

//var_dump($dbConfig);

if($_SERVER['REQUEST_METHOD'] == 'POST'){



    if(isset($_FILES['my_file'])){
        if(!file_exists(UPLOADS_DIR)){
            mkdir(UPLOADS_DIR);

            };

        }
        $filename = UPLOADS_DIR . $_FILES['my_file']['name'];
        $path = $_FILES['my_file']['name'];

        if(uploadFile($filename, 'my_file')){
            img_resize($filename, SMALL_DIR . $_FILES['my_file']['name'], 200, 200 );
            saveImg($path);

            //$path = $_FILES['my_file']['name'];
            //$sql = "INSERT INTO gallery(path) VALUE ('$path')";

            //execute( $sql);
            //if(!$res = mysqli_query($conn, $sql)){
            //   var_dump(mysqli_error($conn));
            //}
    }

    redirect('/HW5.php');

 
}
//$sql = "SELECT * FROM gallery";

//$res = mysqli_query($conn, $sql);

//$files = mysqli_fetch_all($res, MYSQLI_ASSOC);
//$files = queryAll($sql);

$files = getGalleryFiles();


//$files = getGallery(UPLOADS_DIR);
//var_dump(getPhoto());

$form_title = "Загрузка файлов";



include VIEWS_DIR . 'gallery.php';
include VIEWS_DIR . 'upload.php';