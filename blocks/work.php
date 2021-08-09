<?php

$title = get_field('title');
$description = get_field('description');
$images = get_field('images');
$tags = get_field('tags');
$link = get_field('link');


$github = get_field('github');
$web = get_field('link');
$figma = get_field('figma');

?>

<div class="block-work">

    <h3 class="block-work--title"><?= $title ?></h3>

    <div class="block-work--description">
        <?= $description ?>
    </div>

    <div class="block-work--tags">
        <?php foreach($tags as $tag): ?>
            <div class="block-work--tag"><?= $tag['tag'] ?></div>
        <?php endforeach; ?>
    </div>

    <?php if(is_array($images)):?>
        <div class="block-work--gallery">
            <?php foreach($images as $i => $image): ?>
                <div class="img-zoom">
                    <img src="<?= $image['url'] ?>" alt="<?= $description ?> <?= $i ?>" />
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif ?>

    <?php if($github !== null && $github !== ''): ?>
        <a target="_blank" class="block-work--link" href="<?= $github ?>"><i class="fab fa-github"></i> GitHub</a>
    <?php endif ?>

    <?php if($web !== null && $web !== ''): ?>
        <a target="_blank" class="block-work--link" href="<?= $web ?>"><i class="fas fa-globe-europe"></i> Web</a>
    <?php endif ?>

    <?php if($figma !== null && $figma !== ''): ?>
        <div class="figma">
            <iframe
                src=""
                class="figma"
                data-src="<?= $figma ?>"
                allowfullscreen>
            </iframe>
        </div>
    <?php endif ?>

</div>
