<?php

$title = get_field('title');
$description = get_field('description');
$images = get_field('images');
$tags = get_field('tags');
$link = get_field('link');
$delay = get_field('delay');


$github = get_field('github');
$web = get_field('link');
$figma = get_field('figma');

?>

<div class="block-work wow fadeInDown" data-wow-delay="<?= $delay ?>s">

    <h3 class="block-work--title"><?= $title ?></h3>

    <div class="block-work--description">
        <?= $description ?>
    </div>

    <div class="block-work--tags">
        <?php foreach($tags as $tag): ?>
            <div class="block-work--tag"><?= $tag['tag'] ?></div>
        <?php endforeach; ?>
    </div>

    <!--

    <?php if(is_array($images)):?>
        <div class="block-work--gallery">
            <?php foreach($images as $i => $image): ?>
                <div class="img-zoom">
                    <img src="<?= $image['url'] ?>" alt="<?= $title ?> impression <?= $i + 1 ?>" />
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif ?>

    -->

    <?php if($github !== null && $github !== ''): ?>
        <a rel="noreferrer noopener" target="_blank" class="block-work--link" href="<?= $github ?>"><i class="fab fa-github"></i> GitHub</a>
    <?php endif ?>

    <?php if($web !== null && $web !== ''): ?>
        <a rel="noreferrer noopener" target="_blank" class="block-work--link" href="<?= $web ?>"><i class="fas fa-globe-europe"></i> Web</a>
    <?php endif ?>

    <?php if($figma !== null && $figma !== ''): ?>
        <a rel="noreferrer noopener" target="_blank" class="block-work--link" href="<?= $figma ?>"><i class="fab fa-figma"></i> Figma</a>
    <?php endif ?>

    <!--

    <?php if($figma !== null && $figma !== ''): ?>
        <div class="figma" data-src="<?= $figma ?>">
            <i class="fas fa-sync-alt"></i>
            <h3>Load Design</h3>
        </div>
    <?php endif ?>

    -->



</div>
