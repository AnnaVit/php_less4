<?php

include_once __DIR__ . '\..\config\main.php';
include_once ENGINE_DIR . 'showGallery.php';
include_once ENGINE_DIR . 'fileUpload.php';
include_once ENGINE_DIR . 'base.php';
include VENDOR_DIR . 'funcImgResize.php';



if($_SERVER['REQUEST_METHOD'] == 'POST'){


    if(isset($_FILES['my_file'])){
        if(!file_exists(UPLOADS_DIR)){
            mkdir(UPLOADS_DIR);
        }
        $filename = UPLOADS_DIR . $_FILES['my_file']['name']; 

        if(uploadFile($filename, 'my_file')){
            img_resize($filename, SMALL_DIR . $_FILES['my_file']['name'], 200, 200 ); 
        }                
    }
    redirect('/less4.php');
 
}

$files = getGallery(UPLOADS_DIR);

$form_title = "Загрузка файлов";

include VIEWS_DIR . 'menu.php';
include VIEWS_DIR . 'gallery.php';
include VIEWS_DIR . 'upload.php';



