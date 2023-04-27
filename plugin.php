<?php

/**
 * Plugin Name: Users Product Info Generation Form
 * Plugin URI: http://mahmud-haisan.com/
 * Description:  Users Product Info Generation Form
 * Version: 1.0
 * Author: Mahmud haisan
 * Author URI: http://mahmud-haisan.com/
 * Developer: Mahmud Haisan
 * Developer URI: http://mahmud-haisan.com/
 * Text Domain: pige493
 * Domain Path: /languages
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

define("PLUGINS_PATH", plugin_dir_path(__FILE__));

//adding stylesheets and scripts
function users_product_info_generation_scripts()
{
    wp_enqueue_style('bootstrap-min', plugin_dir_url(__FILE__) . 'assets/css/bootstrap.min.css');
    wp_enqueue_style('style-css-ss', plugin_dir_url(__FILE__) . 'assets/css/style.css');
    wp_enqueue_style('fontawesome-css-min', plugin_dir_url(__FILE__) . 'assets/css/fontawesome.min.css');

    wp_enqueue_script('bootstrap-min', plugin_dir_url(__FILE__) . 'assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('script', plugin_dir_url(__FILE__) . 'assets/js/script.js', array('jquery'), '1.0.0', true);
    wp_localize_script(
        'script',
        'generate_user_product_info',
        array(
            'ajaxurl' => admin_url('admin-ajax.php'),
        )
    );
}

add_action('wp_enqueue_scripts', 'users_product_info_generation_scripts');

//adding frontend shortcode

add_shortcode('users_product_info_form', 'users_product_info_form');

function users_product_info_form()
{

    if (is_user_logged_in()) {

        require_once PLUGINS_PATH . '/functions.php';

        ?>

<div class="container">


    <div class="">

        <form id="product-info-generation-form" name="product_info_form" method="post"
            class="checkout woocommerce-checkout" action="" enctype="multipart/form-data">
            <div class="accordion mt-5">
                <?php

        require_once PLUGINS_PATH . '/parts/product-info.php';
        require_once PLUGINS_PATH . '/parts/part-group.php';
        require_once PLUGINS_PATH . '/parts/advantage.php';
        require_once PLUGINS_PATH . '/parts/figure.php';

        ?>

                <div class="reset-submit-btn-area mt-3">
                    <input class="btn btn-outline-primary" type="reset" value="Reset">
                    <input class="btn btn-success" id="product_info_submit" type="submit" name="product_info_submit"
                        value="Submit">
                </div>
            </div>
        </form>
    </div>
</div>

<?php } else {?>
<div class="container mt-5 mb-5">
    <div class="not-logged-in-text">
        <div class="bg-warning p-5">
            <h3 class="text-center">
                Please Login To See and Fill up the form
            </h3>
        </div>
    </div>
</div>



<?php }}

add_action('woocommerce_after_account_downloads', 'add_user_generated_product_info');

function add_user_generated_product_info()
{
    echo 'hello';
}

/*
 * Step 1. Add Link (Tab) to My Account menu
 */
add_filter('woocommerce_account_menu_items', 'pige493_add_user_generated_inputs_vals', 30);
function pige493_add_user_generated_inputs_vals($menu_links)
{

    $menu_links = array_slice($menu_links, 0, 3, true)
     + array('info-downloads' => 'Product Info')
     + array_slice($menu_links, 3, null, true);

    return $menu_links;
}

/*
 * Step 2. Register Permalink Endpoint
 */
add_action('init', 'pige493_endpoints');
function pige493_endpoints()
{

    add_rewrite_endpoint('info-downloads', EP_PAGES);
}

add_action('woocommerce_account_info-downloads_endpoint', 'pige493_endpoint_contents');

function pige493_endpoint_contents()
{
    $current_user_id = get_current_user_id();
    $users_submitted_info_form_values = unserialize(get_user_meta($current_user_id, 'product-info-generation-form-input-values')[0]);

    // echo '<pre>';
    // print_r($users_submitted_info_form_values);
    // echo '</pre>';

    $user_product_info_tittle = $users_submitted_info_form_values['product-info-tittle'];
    $user_product_part_group = $users_submitted_info_form_values['part-group'];
    $user_product_advantage_group = $users_submitted_info_form_values['advantage-group'];
    $user_product_figure_group = $users_submitted_info_form_values['figure-group'];

    // echo '<pre>';
    // print_r($user_product_part_group);
    // print_r($user_product_advantage_group);
    // echo '</pre>';
    ?>

<div id="show-user-generated_infos">
    <div class="container">

        <div class="row">
            <div class="col-md-10">
                <h2>

                    Product Info
                </h2>
            </div>
            <div class="col-md-2">

                <div class="btn btn-dark">View</div>

            </div>
        </div>


        <!-- Dynamic Group Info Fillup -->
        <div id="dynamic-group-info-fillup" class="mt-3">
            <div class="product-info-inside-wrapper">

                <div class="h3 bg-dark text-white text-center p-3 product-header-title">
                    <b>Product Description</b>
                </div>

                <!-- Product Group Wrapper -->
                <div class="product-group-wrapper pt-3">
                    <div class="part-group-text">
                        <h3>Part Group</h3>
                    </div>

                    <div class="part-group-inside h5">
                        <div>
                            The <?php echo $user_product_info_tittle; ?> Comprises:
                        </div>

                        <?php

    foreach ($user_product_part_group as $index => $part_group_value) {?>
                        <div>
                            <?php echo $index + 1 . ' : ' . $part_group_value; ?>
                        </div>
                        <?php }
    ?>
                    </div>
                </div>
                <!-- Product Group Wrapper -->

                <!-- Product Group Wrapper -->
                <div class="product-group-wrapper pt-3">
                    <div class="part-group-text">
                        <h3>Figure Group</h3>
                    </div>

                    <div class="part-group-inside h5">

                        <?php

    foreach ($user_product_figure_group as $index => $figure_group_value) {?>
                        <div>
                            <?php echo $index + 1 . ' : ' . $figure_group_value; ?>
                        </div>
                        <?php }
    ?>
                    </div>
                </div>
                <!-- Product Group Wrapper -->

            </div>
        </div>



    </div>


    <div class="product-advantage-part">

        <div class="mt-3">

            <h2 class="bg-dark text-white pt-2 pb-2 text-center">
                Product Advantage
            </h2>

            <p class="h5">
                The present product substantially departs from the conventional concepts and designs of the prior art.
                In doing so, the present product provides (a or an)
                <?php echo '<b>' . $user_product_info_tittle . '</b>'; ?> ,
                having many unique and significant features, functions, and advantages,
                which overcome all the disadvantages of the prior art, as follows:

            </p>

            <!-- Product Group Wrapper -->
            <div class="product-group-wrapper pt-3">
                <div class="part-group-text">
                    <h3>Advantage Group</h3>
                </div>

                <div class="part-group-inside h5">

                    <?php

    foreach ($user_product_advantage_group as $index => $advantage_group_value) {?>
                    <div>
                        <?php echo $index + 1 . ' : ' . $advantage_group_value; ?>
                    </div>
                    <?php }
    ?>
                </div>
            </div>
            <!-- Product Group Wrapper -->




        </div>

    </div>

</div>

<?php }

if (is_admin() && defined('DOING_AJAX') && DOING_AJAX) {
    require PLUGINS_PATH . '/ajax.php';
}