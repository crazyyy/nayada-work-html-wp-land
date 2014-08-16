<?php
/*
 *  Author: knaipa | @Saitobaza
 *  URL: saitobaza.ru 
 *  Custom functions, support, custom post types and more.
 */

//  Enable styles for WP admin panel
//  RU: Подключение собственных шрифтов и скриптов для админки
function wpeAdminThemeStyle() {
    wp_enqueue_style('wpe-admin-style', get_template_directory_uri() . '/css/admin.css');
    wp_enqueue_style('wpe-admin-script', get_template_directory_uri() . '/js/admin.js');
}
add_action('admin_enqueue_scripts', 'wpeAdminThemeStyle');

//  Catch first image from post and display it
//  RU: Выделить первую изображение из записи
function catchFirstImage() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i',
    $post->post_content, $matches);
    $first_img = $matches [1] [0];
//  If post dont have an image - display image "noimage"
//  RU: Если запись не содержит изображения - показывать картинку "noimage" 
    if(empty($first_img)){
    $first_img = get_template_directory_uri() . '/img/noimage.jpg'; }
    return $first_img;
}

//  Disable auto save posts
//  RU: Отключение автоматического сохранения записи
//  http://wordpresso.org/hacks/29-wordpress-tryukov-dlya-rabotyi-s-zapisyami-i-stranitsami/
function disableAutoSave(){
    wp_deregister_script('autosave');
}
add_action( 'wp_print_scripts', 'disableAutoSave' );

/*------------------------------------*\
    External Modules/Files
    RU: Подключение внешних модулей/файлов
\*------------------------------------*/
//  Load styles
//  RU: Подключение стилей
function wpeStyles()    {
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.min.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!
    wp_register_style('wpeasy-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('wpeasy-style'); // Enqueue it!
}
//  Loading JS
//  RU: Подключение скриптов
function wpeHeaderScripts()
{
    if (!is_admin()) {
//  Load header scripts (header.php)
//  RU: Подключение скриптов в шапку (header.php)
        wp_deregister_script('jquery'); // Deregister WordPress jQuery   RU: Отключаю стандартный JQuery WordPress'а  
        wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), '1.11.0'); // Google CDN jQuery   RU: Регистрирую JQuery с хостинга Google
        wp_enqueue_script('jquery'); // Enqueue it!    RU: Подключаю его
        wp_register_script('conditionizr', 'http://cdnjs.cloudflare.com/ajax/libs/conditionizr.js/2.2.0/conditionizr.min.js', array(), '2.2.0', false); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

//  Load footer scripts (footer.php)
//  RU: Подключение скриптов в подвал (footer.php)
        wp_register_script('modernizr', 'http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js', array(), '2.6.2', true); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!
        
        wp_register_script('wpeScripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true); // Custom scripts
        wp_enqueue_script('wpeScripts'); // Enqueue it!
    }
}

//  Load conditional scripts
//  RU: Пример подключения стороннего шрифта дял специфической страницы
/*
function wpeConditionalScripts()    {
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}
add_action('wp_print_scripts', 'wpeConditionalScripts'); // Add Conditional Page Scripts
*/

/*------------------------------------*\
	Theme Cleanup
    RU: Отключение всякого лишнего
\*------------------------------------*/
//  Remove wp_head() injected Recent Comment styles
//  RU: отключение вывод стилей комментарие в шапке
function my_remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}



// Load any external files you have here

/*------------------------------------*\
    Theme Support
\*------------------------------------*/










if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    //  RU: Добавление поддержки темой собственного фона - цвета или зображения. Раскоментируйте, что бы работало
    // http://wp-kama.ru/function/add_theme_support#h3_3
    /* 
    add_theme_support('custom-background', array(
	'default-color' => 'ccc',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));
    */

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('wpeasy', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Theme functions
    RU: Настройки темы
\*------------------------------------*/
//  Enable wordpress menu
//  RU: Подключение трех меню WP

// WPE head navigation
function wpeHeadNav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '', 
		'container'       => 'div', 
		'container_class' => 'menu-{menu slug}-container', 
		'container_id'    => '',
		'menu_class'      => 'menu', 
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul class="headnav">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}
//  Register WPE Navigation
//  RU: Регистрация менюшек
function register_html5_menu() {
    register_nav_menus(array( 
        'header-menu' => __('Меню в шапке', 'wpeasy')
    ));
}

//  Custom Excerpts
//  RU: Произвольное обрезание текста
function wpeExcerpt20($length) {
    return 20;
}
//  Create the Custom Excerpts callback
//  RU: Собственная обрезка контента
function wpeExcerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}


// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}


// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}



// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'wpeHeaderScripts'); // Add Scripts to wp_head
add_action('wp_enqueue_scripts', 'wpeStyles'); // Add Theme Stylesheet


add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments

add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether


?>