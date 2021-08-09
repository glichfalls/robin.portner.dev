<?php

$skill = get_field('skill');
$icon = get_field('icon');

?>

<div class="skill">
    <i class="<?= $icon ?>"></i> <?= $skill ?>
</div>
