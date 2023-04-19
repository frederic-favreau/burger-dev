<?php
$title = $data->getTitle();
ob_start();
?>
<div class="row">
    <div class="post">
        <h1><?= $data->getTitle() ?></h1>
            <p><?= $data->getExtract() ?></p>
            <p><?= $data->getContent() ?></p>
    </div>
    <p><a href="./index.php">Retour</a></p>
</div>
<?php $content = ob_get_clean(); ?>
<?php require_once('./view/template.php'); ?>