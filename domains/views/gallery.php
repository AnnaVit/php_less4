<?php
/** @var arrey $files */
?>
<?php foreach($files as $file): ?>
    <a href="/uploads/<?=$file?>" target="_blank"><img width="200px" src="/small/<?=$file?>" alt="img"></a>
<?php endforeach;?>

