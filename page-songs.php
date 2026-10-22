<?php
/**
 * Template Name: Songs / Audio Store Engine
 * Description: Give It All Records React Audio Engine WordPress Page Template.
 *              Drop page-songs.php and the dist/ directory into your active theme folder.
 * 
 * @package GiveItAllRecords
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$theme_uri  = get_stylesheet_directory_uri();
$theme_path = get_stylesheet_directory();

$css_file = '/dist/assets/index.css';
$js_file  = '/dist/assets/index.js';

$css_ver = file_exists($theme_path . $css_file) ? filemtime($theme_path . $css_file) : '1.0.0';
$js_ver  = file_exists($theme_path . $js_file) ? filemtime($theme_path . $js_file) : '1.0.0';

// Register & enqueue normalized React assets
wp_enqueue_style(
    'gia-audio-engine-style',
    $theme_uri . $css_file,
    array(),
    $css_ver
);

wp_enqueue_script(
    'gia-audio-engine-script',
    $theme_uri . $js_file,
    array(),
    $js_ver,
    true
);

// Ensure the Vite JavaScript bundle loads with type="module"
add_filter('script_loader_tag', function ($tag, $handle, $src) {
    if ('gia-audio-engine-script' === $handle) {
        return '<script type="module" src="' . esc_url($src) . '"></script>' . "\n";
    }
    return $tag;
}, 10, 3);

// Expose WordPress & WooCommerce configuration object to window for cart/checkout integration
add_action('wp_footer', function () {
    $wc_active = class_exists('WooCommerce');
    $config = array(
        'ajaxUrl'             => admin_url('admin-ajax.php'),
        'restUrl'             => rest_url('gia/v1/'),
        'nonce'               => wp_create_nonce('wp_rest'),
        'themeUri'            => get_stylesheet_directory_uri(),
        'isWooCommerceActive' => $wc_active,
        'checkoutUrl'         => $wc_active ? wc_get_checkout_url() : '',
        'cartUrl'             => $wc_active ? wc_get_cart_url() : '',
    );
    ?>
    <script type="text/javascript" id="gia-wp-config">
        window.GIA_WP_CONFIG = <?php echo wp_json_encode($config); ?>;
    </script>
    <?php
}, 5);

get_header();
?>

<main id="primary" class="site-main gia-store-main-wrapper" style="background-color: #000000; min-height: 100vh; padding: 0; margin: 0; width: 100%;">
    <!-- React Audio Engine Mounting Point -->
    <div id="root">
        <noscript>
            <div style="color: #ffffff; padding: 40px; text-align: center; font-family: monospace; background: #000000;">
                [ GIA AUDIO ENGINE ] — Please enable JavaScript in your browser to audition and license audio masters.
            </div>
        </noscript>
    </div>
</main>

<?php
get_footer();
