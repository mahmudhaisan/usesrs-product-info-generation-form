<?php

add_action('wp_ajax_create_new_part_group', 'create_new_part_group');
add_action('wp_ajax_nopriv_create_new_part_group', 'create_new_part_group');

function create_new_part_group()
{
    echo 'hello';
    wp_die();
}