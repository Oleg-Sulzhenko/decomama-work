<?php

function add_css_and_js() {
    // Deregister the included library
//    wp_deregister_script('jquery');
    // Register the library again from Google's CDN
//    wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array(), null, false);

    wp_register_script('bxslider-script', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery', 'jquery-ui-core'), '0.1', false);
    wp_enqueue_script('bxslider-script');

    wp_register_script('ui-custom-script', get_template_directory_uri() . '/js/jquery-ui-1.10.3.custom.min.js', array('jquery'), '0.1', false);
    wp_enqueue_script('ui-custom-script');

    wp_register_script('prettyPhoto-script', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array('jquery'), '0.1', false);
    wp_enqueue_script('prettyPhoto-script');

    wp_register_script('imagesloaded-script', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'), '0.1', false);
    wp_enqueue_script('imagesloaded-script');

    wp_register_script('masonry-script', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array('jquery'), '0.1', false);
    wp_enqueue_script('masonry-script');

    wp_register_script('theme-script', get_template_directory_uri() . '/js/theme.js', array('jquery', 'jquery-ui-core'), '0.1', false);
    wp_enqueue_script('theme-script');

    //CSS----------------
    wp_register_style('wp-styles', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('wp-styles');

    wp_register_style('theme-style', get_template_directory_uri() . '/css/theme.css', array(), '0.1', all);
    wp_enqueue_style('theme-style');

    wp_register_style('bxslider-style', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), '0.1', all);
    wp_enqueue_style('bxslider-style');
}

add_action('wp_enqueue_scripts', 'add_css_and_js'); // more parametrs exist 

function add_css_in_admin() {
    wp_register_style('wp-admin-styles', get_template_directory_uri() . '/css/admin.css');
    wp_enqueue_style('wp-admin-styles');
}

add_action('admin_enqueue_scripts', 'add_css_in_admin'); // for uploading sripts in admin area
//----------------------------------------------------------------------------------
//Widgets Menus Sidebars Areas Initialization

function theme_widgets_init() {
    register_sidebar(array(
        'name' => __('Shop Sidebar', 'twentytwelve'),
        'id' => 'sidebar-1',
        'description' => __('Sidebar for Shop page'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'theme_widgets_init');

//---------

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Footer Sidebar',
        'id' => 'footer-1-widget',
        'description' => __('Widget area in footer'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="title">',
        'after_title' => '</h6>',
    ));
    register_sidebar(array(
        'name' => 'Footer Sidebar 2',
        'id' => 'footer-2-widget',
        'description' => __('Widget area in footer'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="title">',
        'after_title' => '</h6>',
    ));
    register_sidebar(array(
        'name' => 'Footer Sidebar 3',
        'id' => 'footer-3-widget',
        'description' => __('Widget area in footer'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="title">',
        'after_title' => '</h6>',
    ));
}




//----------------------------------------------------------------------------------
//Add Theme Support ----------------------------------------------------
add_theme_support('post-thumbnails', array('post', 'page', 'decor'));

//remove filter for simple image gallery plugin
remove_filter('the_content', 'easy_image_gallery_append_to_content');


/**
 * Check to see if the function exists
 * It is always a good practice to avoid any version conflict
 */
if (function_exists('add_theme_support')) {
    /** Exists! So add the post-thumbnail */
    add_theme_support('post-thumbnails');

    /** Now Set some image sizes */
    /** #1 pages top thumbnail */
    add_image_size($name = 'main-big-img', $width = 960, $height = 318, $crop = true);

    /** #2 for Decor content slider */
    add_image_size('decor-img', 300, 168, true);

    add_image_size('wedding-img', 290, 9999);

    add_image_size('full-img', 9999, 9999);

//    set_post_thumbnail_size($width = 300, $height = 168, $crop = TRUE);
}

/**
 * Change the thumbnail size depending on the post type
 */
function sumobi_eig_thumbnail_image_size($image_size) {
    $post_type = get_post_type();

    switch ($post_type) {
        case 'page':
            $image_size = 'wedding-img';
            break;

        case 'decor':
            $image_size = 'wedding-img';
            break;

        case 'wedding':
            $image_size = 'wedding-img';
            break;

        case 'orenda':
            $image_size = 'wedding-img';
            break;

        case 'post':
            $image_size = 'medium';
            break;


        // all other post types will use the standard 'thumbnail' size from Settings -> Media
        default:
            $image_size = 'thumbnail';
            break;
    }

    return $image_size;
}

add_filter('easy_image_gallery_thumbnail_image_size', 'sumobi_eig_thumbnail_image_size');




















//Add Custom Post type DECOR !!!!
add_action('init', 'decor_register');

function decor_register() {

    $labels = array(
        'name' => _x('Декор', 'post type general name'),
        'singular_name' => _x('Декор', 'post type singular name'),
        'add_new' => _x('Додати', 'portfolio item'),
        'add_new_item' => __('Додати'),
        'edit_item' => __('Декор'),
        'new_item' => __('Додати'),
        'view_item' => __('Переглянути'),
        'search_items' => __('Шукати'),
        'not_found' => __('Нічого незнайденно'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => get_template_directory_uri() . '/img/decor-icon.png',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 3,
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('decor', $args);
}

register_taxonomy("Skills", array("decor"), array("hierarchical" => true, "label" => "Категорії", "singular_label" => "Категорія", "rewrite" => true));



//Add Custom Post type for - ORENDA !!!!!! 
add_action('init', 'orenda_register');

function orenda_register() {

    $labels = array(
        'name' => _x('Оренда', 'post type general name'),
        'singular_name' => _x('Оренда', 'post type singular name'),
        'add_new' => _x('Додати', 'portfolio item'),
        'add_new_item' => __('Додати'),
        'edit_item' => __('Оренда'),
        'new_item' => __('Додати'),
        'view_item' => __('Переглянути'),
        'search_items' => __('Шукати'),
        'not_found' => __('Нічого незнайденно'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => get_template_directory_uri() . '/img/orenda-icon.png',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 4,
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('orenda', $args);
}

register_taxonomy("mytaxonomyorenda", array("orenda"), array("hierarchical" => true, "label" => "Категорії", "singular_label" => "Категорія", "rewrite" => true));





//Add Custom Post type for - WEDDING !!!!!! 
add_action('init', 'wedding_register');

function wedding_register() {

    $labels = array(
        'name' => _x('Весілля', 'post type general name'),
        'singular_name' => _x('Весілля', 'post type singular name'),
        'add_new' => _x('Додати', 'portfolio item'),
        'add_new_item' => __('Додати'),
        'edit_item' => __('Весілля'),
        'new_item' => __('Додати'),
        'view_item' => __('Переглянути'),
        'search_items' => __('Шукати'),
        'not_found' => __('Нічого незнайденно'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => get_template_directory_uri() . '/img/wedding-icon.png',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('wedding', $args);
}

register_taxonomy("mytaxonomywedding", array("wedding"), array("hierarchical" => true, "label" => "Категорії", "singular_label" => "Категорія", "rewrite" => true));



//Add Custom Post type for - Testimonials !!!!!! 
add_action('init', 'register_cpt_testimonial');

function register_cpt_testimonial() {
    $labels = array(
        'name' => _x('Відгуки', 'testimonial'),
        'singular_name' => _x('Відгук', 'testimonial'),
        'add_new' => _x('Add New', 'testimonial'),
        'add_new_item' => _x('Add New Відгук', 'testimonial'),
        'edit_item' => _x('Edit Відгук', 'testimonial'),
        'new_item' => _x('New Відгук', 'testimonial'),
        'view_item' => _x('View Відгук', 'testimonial'),
        'search_items' => _x('Search Testimonials', 'testimonial'),
        'not_found' => _x('No testimonials found', 'testimonial'),
        'not_found_in_trash' => _x('No testimonials found in Trash', 'testimonial'),
        'parent_item_colon' => _x('Parent Testimonial:', 'testimonial'),
        'menu_name' => _x('Відгуки', 'Відгук'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
    register_post_type('testimonial', $args);
}

if (!class_exists('Tax_CTP_Filter')) {

    /**
     * Tax CTP Filter Class 
     * Simple class to add custom taxonomy dropdown to a custom post type admin edit list
     * @author Ohad Raz <admin@bainternet.info>
     * @version 0.1
     */
    class Tax_CTP_Filter {

        /**
         * __construct 
         * @author Ohad Raz <admin@bainternet.info>
         * @since 0.1
         * @param array $cpt [description]
         */
        function __construct($cpt = array()) {
            $this->cpt = $cpt;
            // Adding a Taxonomy Filter to Admin List for a Custom Post Type
            add_action('restrict_manage_posts', array($this, 'my_restrict_manage_posts'));
        }

        /**
         * my_restrict_manage_posts  add the slelect dropdown per taxonomy
         * @author Ohad Raz <admin@bainternet.info>
         * @since 0.1
         * @return void
         */
        public function my_restrict_manage_posts() {
            // only display these taxonomy filters on desired custom post_type listings
            global $typenow;
            $types = array_keys($this->cpt);
            if (in_array($typenow, $types)) {
                // create an array of taxonomy slugs you want to filter by - if you want to retrieve all taxonomies, could use get_taxonomies() to build the list
                $filters = $this->cpt[$typenow];
                foreach ($filters as $tax_slug) {
                    // retrieve the taxonomy object
                    $tax_obj = get_taxonomy($tax_slug);
                    $tax_name = $tax_obj->labels->name;

                    // output html for taxonomy dropdown filter
                    echo "<select name='" . strtolower($tax_slug) . "' id='" . strtolower($tax_slug) . "' class='postform'>";
                    echo "<option value=''>Відображати всі $tax_name</option>";
                    $this->generate_taxonomy_options($tax_slug, 0, 0, (isset($_GET[strtolower($tax_slug)]) ? $_GET[strtolower($tax_slug)] : null));
                    echo "</select>";
                }
            }
        }

        /**
         * generate_taxonomy_options generate dropdown
         * @author Ohad Raz <admin@bainternet.info>
         * @since 0.1
         * @param  string  $tax_slug 
         * @param  string  $parent   
         * @param  integer $level    
         * @param  string  $selected 
         * @return void            
         */
        public function generate_taxonomy_options($tax_slug, $parent = '', $level = 0, $selected = null) {
            $args = array('show_empty' => 1);
            if (!is_null($parent)) {
                $args = array('parent' => $parent);
            }
            $terms = get_terms($tax_slug, $args);
            $tab = '';
            for ($i = 0; $i < $level; $i++) {
                $tab.='--';
            }

            foreach ($terms as $term) {
                // output each select option line, check against the last $_GET to show the current option selected
                echo '<option value=' . $term->slug, $selected == $term->slug ? ' selected="selected"' : '', '>' . $tab . $term->name . ' (' . $term->count . ')</option>';
                $this->generate_taxonomy_options($tax_slug, $term->term_id, $level + 1, $selected);
            }
        }

    }

    //end class
}//end if


new Tax_CTP_Filter(array(
    'decor' => array('Skills'),
    'orenda' => array('mytaxonomyorenda'),
    'wedding' => array('mytaxonomywedding'),
        ));

function wpa85791_category_posts_per_page($query) {
    if ($query->is_category() && $query->is_main_query())
        $query->set('posts_per_page', 2);
}

add_action('pre_get_posts', 'wpa85791_category_posts_per_page');



//Custom currcy symbol ------------------------------------------
add_filter('woocommerce_currencies', 'add_my_currency');

function add_my_currency($currencies) {
    $currencies['ABC'] = __('Currency name', 'woocommerce');
    return $currencies;
}

add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);

function add_my_currency_symbol($currency_symbol, $currency) {
    switch ($currency) {
        case 'ABC': $currency_symbol = ' грн.';
            break;
    }
    return $currency_symbol;
}

//Woocomerce----------------------------------
// Hook in
add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields($fields) {
    unset($fields['order']['order_comments']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_last_name']);

    $fields['billing']['billing_first_name']['label'] = 'Імя';
    $fields['billing']['billing_email']['label'] = 'Емейл';
    $fields['billing']['billing_phone']['label'] = 'Контактиний телефон';

    return $fields;
}

function custom_menu_order($menu_ord) {
    if (!$menu_ord)
        return true;

    return array(
        'edit.php?post_type=page', // Pages        
        'edit.php', // Posts
        'edit.php?post_type=testimonial', // Testimonial
        'separator1', // First separator
        'separator2', // First separator
        'edit.php?post_type=decor',
        'edit.php?post_type=orenda',
        'edit.php?post_type=wedding',
        'separator3', // First separator
        'separator4', // First separator
        'upload.php', // Media
        'link-manager.php', // Links
        'edit-comments.php', // Comments
        'separator2', // Second separator
        'themes.php', // Appearance
        'plugins.php', // Plugins
        'users.php', // Users
        'tools.php', // Tools
        'options-general.php', // Settings
        'separator-last', // Last separator
        'index.php', // Dashboard
    );
}

add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
add_filter('menu_order', 'custom_menu_order');
