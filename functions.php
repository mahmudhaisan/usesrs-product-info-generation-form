<?php

if (isset($_POST['product_info_submit'])) {

    $current_user_id = get_current_user_id();
    $product_info_title = ($_POST['product-info-title']);
    $part_group_array = ($_POST['part-group-input']);
    $advantage_group_array = ($_POST['advantage-group-input']);
    $figure_group_array = ($_POST['figure-group-input']);

    $assoc_array_groups = array(
        'product-info-tittle' => $product_info_title,
        'part-group' => $part_group_array,
        'advantage-group' => $advantage_group_array,
        'figure-group' => $figure_group_array,
    );

    $serialize_input_values = serialize($assoc_array_groups);

    update_user_meta($current_user_id, 'product-info-generation-form-input-values', $serialize_input_values);

}
