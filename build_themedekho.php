<?php
require_once('wp-load.php');

// 1. Delete all existing pages
$pages = get_pages();
foreach ($pages as $page) {
    wp_delete_post($page->ID, true);
}

// 2. Configure Astra Global Settings
$astra_settings = get_option('astra-settings', []);
$astra_settings['theme-color'] = '#6C5CE7';
$astra_settings['link-color'] = '#6C5CE7';
$astra_settings['text-color'] = '#1F2937';
$astra_settings['site-layout-outside-bg-obj'] = ['background-color' => '#F8FAFC'];
$astra_settings['site-background-color'] = '#F8FAFC';
$astra_settings['h1-color'] = '#111827';
$astra_settings['h2-color'] = '#111827';
$astra_settings['h3-color'] = '#111827';
update_option('astra-settings', $astra_settings);

// Helper for generic sections
function get_hero_html() {
    return <<<HTML
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"20px","right":"20px"}},"color":{"background":"#F8FAFC"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#F8FAFC;padding-top:100px;padding-right:20px;padding-bottom:100px;padding-left:20px">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"60px"}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"55%"} -->
        <div class="wp-block-column" style="flex-basis:55%">
            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"13px","letterSpacing":"1px","textTransform":"uppercase"},"color":{"text":"#6C5CE7"}}} -->
            <p class="has-text-color" style="color:#6C5CE7;font-size:13px;font-weight:600;letter-spacing:1px;text-transform:uppercase">PREMIUM WORDPRESS THEMES</p>
            <!-- /wp:paragraph -->
            <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"52px","lineHeight":"1.1","fontWeight":"800"},"color":{"text":"#111827"}}} -->
            <h1 class="wp-block-heading has-text-color" style="color:#111827;font-size:52px;font-weight:800;line-height:1.1">Build Better Websites with Better Themes.</h1>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.6"},"color":{"text":"#64748B"},"spacing":{"margin":{"bottom":"30px"}}}} -->
            <p class="has-text-color" style="color:#64748B;font-size:18px;line-height:1.6;margin-bottom:30px">Discover modern, responsive and professionally designed WordPress themes built to help businesses, creators and professionals launch beautiful websites faster.</p>
            <!-- /wp:paragraph -->
            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"style":{"border":{"radius":"6px"},"color":{"background":"#6C5CE7","text":"#FFFFFF"}}} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="/themes/" style="border-radius:6px;background-color:#6C5CE7;color:#FFFFFF">Explore Themes</a></div>
                <!-- /wp:button -->
                <!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px"},"color":{"text":"#1F2937"}}} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#features" style="border-radius:6px;color:#1F2937">View Features</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"},"color":{"text":"#64748B"},"spacing":{"margin":{"top":"20px"}}}} -->
            <p class="has-text-color" style="color:#64748B;font-size:13px;margin-top:20px">Responsive • Customizable • WordPress Ready</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"width":"45%"} -->
        <div class="wp-block-column" style="flex-basis:45%">
            <!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"16px"}}} -->
            <figure class="wp-block-image size-large has-custom-border"><img src="https://via.placeholder.com/600x500/6C5CE7/FFFFFF?text=Theme+Mockups" alt="Theme Mockups" style="border-radius:16px"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
HTML;
}

function get_stats_html() {
    return <<<HTML
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"20px","right":"20px"}},"color":{"background":"#FFFFFF"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#FFFFFF;padding-top:40px;padding-right:20px;padding-bottom:40px;padding-left:20px">
    <!-- wp:columns -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"38px","fontWeight":"800"},"color":{"text":"#6C5CE7"}}} -->
            <h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#6C5CE7;font-size:38px;font-weight:800">10K+</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontWeight":"600"}}} -->
            <p class="has-text-align-center" style="font-weight:600">Happy Users</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"38px","fontWeight":"800"},"color":{"text":"#6C5CE7"}}} -->
            <h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#6C5CE7;font-size:38px;font-weight:800">100+</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontWeight":"600"}}} -->
            <p class="has-text-align-center" style="font-weight:600">Theme Designs</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"38px","fontWeight":"800"},"color":{"text":"#6C5CE7"}}} -->
            <h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#6C5CE7;font-size:38px;font-weight:800">4.9/5</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontWeight":"600"}}} -->
            <p class="has-text-align-center" style="font-weight:600">Customer Rating</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"38px","fontWeight":"800"},"color":{"text":"#6C5CE7"}}} -->
            <h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#6C5CE7;font-size:38px;font-weight:800">24/7</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontWeight":"600"}}} -->
            <p class="has-text-align-center" style="font-weight:600">Support</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
HTML;
}

function get_featured_themes_html() {
    $themes = ['BusinessPro', 'ShopEase', 'PortfolioX', 'TechNova', 'BlogCraft', 'AgencyPro'];
    $cards = '';
    foreach($themes as $theme) {
        $cards .= <<<HTML
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}},"border":{"radius":"16px"},"color":{"background":"#FFFFFF"}}} -->
        <div class="wp-block-column has-background" style="border-radius:16px;background-color:#FFFFFF;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;box-shadow:0 1px 2px rgba(16,26,62,.06),0 12px 32px rgba(16,26,62,.08);">
            <!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
            <figure class="wp-block-image size-large has-custom-border"><img src="https://via.placeholder.com/400x250/E2E8F0/111827?text={$theme}" alt="{$theme}" style="border-radius:8px"/></figure>
            <!-- /wp:image -->
            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"22px","fontWeight":"700"},"spacing":{"margin":{"top":"15px","bottom":"5px"}}}} -->
            <h3 class="wp-block-heading" style="font-size:22px;font-weight:700;margin-top:15px;margin-bottom:5px">{$theme}</h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"},"color":{"text":"#6C5CE7"},"spacing":{"margin":{"bottom":"10px"}}}} -->
            <p class="has-text-color" style="color:#6C5CE7;font-size:14px;margin-bottom:10px">Premium Theme</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"},"color":{"text":"#64748B"},"spacing":{"margin":{"bottom":"20px"}}}} -->
            <p class="has-text-color" style="color:#64748B;font-size:14px;margin-bottom:20px">Professional WordPress theme for modern websites.</p>
            <!-- /wp:paragraph -->
            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"style":{"border":{"radius":"6px"},"color":{"background":"#6C5CE7","text":"#FFFFFF"}}} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#" style="border-radius:6px;background-color:#6C5CE7;color:#FFFFFF">Live Demo</a></div>
                <!-- /wp:button -->
                <!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"6px"},"color":{"text":"#1F2937"}}} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="/themes/businesspro/" style="border-radius:6px;color:#1F2937">View Theme</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
HTML;
    }

    return <<<HTML
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"20px","right":"20px"}},"color":{"background":"#F8FAFC"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#F8FAFC;padding-top:80px;padding-right:20px;padding-bottom:80px;padding-left:20px">
    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"38px","fontWeight":"800"}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="font-size:38px;font-weight:800">Explore Our Featured Themes</h2>
    <!-- /wp:heading -->
    <!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontSize":"18px"},"color":{"text":"#64748B"},"spacing":{"margin":{"bottom":"50px"}}}} -->
    <p class="has-text-align-center has-text-color" style="color:#64748B;font-size:18px;margin-bottom:50px">Discover professionally designed WordPress themes created for modern businesses, stores, creators and professionals.</p>
    <!-- /wp:paragraph -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"30px"}}} -->
    <div class="wp-block-columns alignwide">
        {$cards}
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
HTML;
}

// Create Pages
$home_content = get_hero_html() . get_stats_html() . get_featured_themes_html();
$home_id = wp_insert_post(['post_title' => 'Home', 'post_content' => $home_content, 'post_status' => 'publish', 'post_type' => 'page']);

$themes_id = wp_insert_post(['post_title' => 'Themes', 'post_content' => get_featured_themes_html(), 'post_status' => 'publish', 'post_type' => 'page']);

$single_theme_content = <<<HTML
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}},"color":{"background":"#F8FAFC"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#F8FAFC;padding-top:80px;padding-bottom:80px">
    <!-- wp:heading {"level":1,"textAlign":"center"} -->
    <h1 class="wp-block-heading has-text-align-center">BusinessPro</h1>
    <!-- /wp:heading -->
    <!-- wp:paragraph {"textAlign":"center","style":{"color":{"text":"#64748B"}}} -->
    <p class="has-text-align-center has-text-color" style="color:#64748B">Modern WordPress Theme for Businesses</p>
    <!-- /wp:paragraph -->
    <!-- wp:image {"align":"center"} -->
    <figure class="wp-block-image aligncenter"><img src="https://via.placeholder.com/1000x500/6C5CE7/FFFFFF?text=BusinessPro+Preview" alt="BusinessPro"/></figure>
    <!-- /wp:image -->
</div>
<!-- /wp:group -->
HTML;
$businesspro_id = wp_insert_post(['post_title' => 'BusinessPro', 'post_name' => 'businesspro', 'post_content' => $single_theme_content, 'post_status' => 'publish', 'post_type' => 'page']);

$about_id = wp_insert_post(['post_title' => 'About', 'post_content' => '<!-- wp:heading --><h2>About ThemeDekho</h2><!-- /wp:heading --><p>ThemeDekho is a modern WordPress theme platform focused on helping businesses, creators and professionals build beautiful websites with less effort.</p>', 'post_status' => 'publish', 'post_type' => 'page']);
$contact_id = wp_insert_post(['post_title' => 'Contact', 'post_content' => '<!-- wp:heading --><h2>Let\'s Build Something Great</h2><!-- /wp:heading --><p>Have a question or need help choosing a theme? Get in touch with our team.</p><!-- wp:shortcode -->[wpforms id="1"]<!-- /wp:shortcode -->', 'post_status' => 'publish', 'post_type' => 'page']);
$pricing_id = wp_insert_post(['post_title' => 'Pricing', 'post_content' => '<!-- wp:heading --><h2>Pricing</h2><!-- /wp:heading -->', 'post_status' => 'publish', 'post_type' => 'page']);
$blog_id = wp_insert_post(['post_title' => 'Blog', 'post_content' => '', 'post_status' => 'publish', 'post_type' => 'page']);

// Set Home & Blog
update_option('show_on_front', 'page');
update_option('page_on_front', $home_id);
update_option('page_for_posts', $blog_id);

// Menus
$menu_name = 'Primary Menu';
$menu_exists = wp_get_nav_menu_object($menu_name);
if (!$menu_exists) {
    $menu_id = wp_create_nav_menu($menu_name);
    wp_update_nav_menu_item($menu_id, 0, ['menu-item-title' => 'Home', 'menu-item-object-id' => $home_id, 'menu-item-object' => 'page', 'menu-item-type' => 'post_type', 'menu-item-status' => 'publish']);
    wp_update_nav_menu_item($menu_id, 0, ['menu-item-title' => 'Themes', 'menu-item-object-id' => $themes_id, 'menu-item-object' => 'page', 'menu-item-type' => 'post_type', 'menu-item-status' => 'publish']);
    wp_update_nav_menu_item($menu_id, 0, ['menu-item-title' => 'Pricing', 'menu-item-object-id' => $pricing_id, 'menu-item-object' => 'page', 'menu-item-type' => 'post_type', 'menu-item-status' => 'publish']);
    wp_update_nav_menu_item($menu_id, 0, ['menu-item-title' => 'About', 'menu-item-object-id' => $about_id, 'menu-item-object' => 'page', 'menu-item-type' => 'post_type', 'menu-item-status' => 'publish']);
    wp_update_nav_menu_item($menu_id, 0, ['menu-item-title' => 'Blog', 'menu-item-object-id' => $blog_id, 'menu-item-object' => 'page', 'menu-item-type' => 'post_type', 'menu-item-status' => 'publish']);
    wp_update_nav_menu_item($menu_id, 0, ['menu-item-title' => 'Contact', 'menu-item-object-id' => $contact_id, 'menu-item-object' => 'page', 'menu-item-type' => 'post_type', 'menu-item-status' => 'publish']);
    
    $locations = get_theme_mod('nav_menu_locations');
    $locations['primary'] = $menu_id;
    set_theme_mod('nav_menu_locations', $locations);
}

echo "Done!";
