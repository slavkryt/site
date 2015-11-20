<?php
$dir = './pictures';
$res = scandir($dir);
//var_dump($res);
foreach ($res as $img):?>
    <?php if (filetype($dir . '/' . $img) === 'file' || filetype($dir . '/' . $img) === 'file'): ?>
        <p style="float: left"><img src="<?= $dir . '/' . $img ?>" alt=""></p>
    <?php endif ?>
<?php endforeach ?>
<?php
include_once __DIR__.('/add_form.php');