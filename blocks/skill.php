<?php

$skill = get_field('skill');
$icon = get_field('icon');

?>

<div class="skill">
    <img src="https://unpkg.com/simple-icons@v5/icons/<?= $icon ?>.svg" alt="<?= $skill ?> icon" />
    <span><?= $skill ?></span>
</div>