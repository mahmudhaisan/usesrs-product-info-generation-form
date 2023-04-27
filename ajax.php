<?php

add_action('wp_ajax_create_new_part_group', 'create_new_part_group');
add_action('wp_ajax_nopriv_create_new_part_group', 'create_new_part_group');

function create_new_part_group()
{
    $part_group_item_count = $_POST['part_group_item_count'];
    // echo $part_group_item_count;
    ?>

<!-- part  group with input -->
<div class="part-group-with-input" group-item="1">
    <div class="group-input-row">

        <!-- groups main title bar -->
        <div class="bg-dark text-white h5 p-2 add-new-group-field">
            <div class="row">
                <div class="col-md-12">Part Group Fields</div>

            </div>
        </div>
        <!-- groups main title bar -->

        <!-- part group input field -->
        <div class=" part-group-1 p-2">


            <div class="form-group">
                <input type="text" class="form-control mt-2" name="part-group-input[]" class="part-group-innput"
                    placeholder="Part Group Field" required>
                <input type="text" class="form-control mt-2" name="part-group-input[]" class="part-group-input"
                    placeholder="Part Group Field" required>
                <input type="text" class="form-control mt-2" name="part-group-input[]" class="part-group-input"
                    placeholder="Part Group Field" required>
                <input type="text" class="form-control mt-2" name="part-group-input[]" class="part-group-input"
                    placeholder="Part Group Field" required>
                <input type="text" class="form-control mt-2" name="part-group-input[]" class="part-group-input"
                    placeholder="Part Group Field" required>
            </div>
        </div>
    </div>
    <!-- part group input row end -->
</div>
<!-- part group wrapper -->

<?php wp_die();
}

add_action('wp_ajax_create_new_figure_group', 'create_new_figure_group');
add_action('wp_ajax_nopriv_create_new_figure_group', 'create_new_figure_group');

function create_new_figure_group()
{

    ?>

<input type="text" class="form-control mt-2" name="figure-inputs[]" placeholder="Figure Fields" required>
<input type="text" class="form-control mt-2" name="figure-inputs[]" placeholder="Figure Fields" required>


<?php wp_die();
}

add_action('wp_ajax_create_new_advantage_group', 'create_new_advantage_group');
add_action('wp_ajax_nopriv_create_new_advantage_group', 'create_new_advantage_group');

function create_new_advantage_group()
{ ?>

<!-- Advantage group with input -->
<div class="advantage-group-with-input">

    <div class="advantage-group-input-row">
        <!-- Advantage group main title bar -->
        <div class="bg-dark text-white h5 p-2 add-new-group-field">
            <div class="row">
                <div class="col-md-12">Advantage Group Fields</div>

            </div>
        </div>

        <!-- Advantage group input field -->
        <div class="group-input-field p-2">
            <div class="form-group">
                <input type="text" class="form-control" name="advantage-group-input[]" placeholder="advantage fields"
                    required>

            </div>

        </div>
    </div>
    <!-- Advantage group input row end -->
</div>
<!-- Advantage group with input -->

<?php wp_die();
}