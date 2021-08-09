<?php


add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {

        acf_register_block_type([
            'name' => 'skill',
            'title' => 'Skill',
            'description' => 'Single Skill',
            'render_template' => '/blocks/skill.php',
            'category' => 'common',
            'mode' => 'preview',
        ]);

        acf_register_block_type([
            'name' => 'work',
            'title' => 'Work',
            'description' => 'Single Work',
            'render_template' => '/blocks/work.php',
            'category' => 'common',
            'mode' => 'edit',
        ]);

    }
});