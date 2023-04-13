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
 * Text Domain: textdomain
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
    wp_enqueue_style('bootstrap-min', plugin_dir_url(__FILE__) . 'css/bootstrap.min.css');
    wp_enqueue_style('style-css-ss', plugin_dir_url(__FILE__) . 'css/style.css');
    wp_enqueue_style('fontawesome-css-min', plugin_dir_url(__FILE__) . 'css/fontawesome.min.css');

    wp_enqueue_script('bootstrap-min', plugin_dir_url(__FILE__) . 'js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('script', plugin_dir_url(__FILE__) . 'js/script.js', array('jquery'), '1.0.0', true);
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

    require_once PLUGINS_PATH . '/functions.php';

    ?>

<div class="container">


    <div class="">

        <form name="product_info_form" method="post" class="checkout woocommerce-checkout"
            id="product-checkout-main-form" action="" enctype="multipart/form-data">
            <div class="accordion mt-5" id="accordionExample">
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

<?php }

if (is_admin() && defined('DOING_AJAX') && DOING_AJAX) {
    require PLUGINS_PATH . '/ajax.php';
}