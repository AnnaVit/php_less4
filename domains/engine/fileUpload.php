<?php
function uploadFile(string $destination, string $attrName = 'my_file') : int
{
     if(isset($_FILES[$attrName])){
        return move_uploaded_file(
            $_FILES[$attrName]['tmp_name'],
            $destination
            );
    }
    return false;        
}
