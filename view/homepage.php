<?php

$style = './CSS/style.css';
$title = "Burger dev";
ob_start();
?>
<main>
    <section id="hero-section">
        <div id="container-hero-section" class="row-limit-size">
            <div id="item-left-hero">
                <span>Recettes Burger</span>
                <h1>tasty & creamy</h1>
                <p>Delicious burgers made from
                    high-quality Australian beef, carefully processed to create a juicy and flavorful taste.</p>
                <a href="#" id="btn-show-recipe"><img src="./img/picto/bag-2.svg" alt="Sac">voir les recettes</a>
            </div>
            <figcaption id="item-right-hero">
                <img src="./img/burger-mobile.png" alt="Burger">
            </figcaption>

        </div>

    </section>
</main>
<div class="row">
    <h1><?= $title ?></h1>
    <div class="posts">
        coucou
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require_once('./view/template.php'); ?>