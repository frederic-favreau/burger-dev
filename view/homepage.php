<?php 
$title = "Coucou c'est la homePage"; 
ob_start();
?>
<div class="row">
    <h1><?= $title ?></h1>
    <div class="posts">
        <?php
            foreach($datas as $data){
        ?>
        <div class="post">
            <h2><?= $data->getTitle() ?></h2>
            <p><?= $data->getExtract() ?></p>
            <p><a href="./index.php?controller=article&action=getone&id=<?= $data->getId() ?>">En savoir plus</a></p>
        </div>
        <?php
        }
        ?>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require_once('./view/template.php'); ?>