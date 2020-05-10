<?php

function getGallery(string $source) : array
{
    return array_filter(
        scandir($source),
        function($item){
            return !is_dir($source . $item);
        }
    );
    
}