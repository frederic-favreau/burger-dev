<?php
$title = "Burger dev";
ob_start();
?>
<div class="row">
    <h1><?= $title ?></h1>
    <div class="posts">
        coucou
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require_once('./view/template.php'); ?>