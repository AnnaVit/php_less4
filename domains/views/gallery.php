<?php
/** @var arrey $files */
?>
<?php foreach($files as $file): ?>
    <a href="/photo.php?id=<?=$file['id']?>" target="blank">
        <img width="200px" src="/small/<?=$file['path']?>" alt="img">
    </a>
<?php endforeach;?>

