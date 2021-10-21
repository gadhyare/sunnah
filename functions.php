<?php


flush_rewrite_rules(true);

function slncb_load_css()
{
   
    if(get_bloginfo("language") == 'ar'  ):
        wp_register_style("bot-min",  "https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css");
        wp_enqueue_style("bot-min");
        wp_register_style("style-rtl", get_template_directory_uri() . "/assets/style-rtl.css");
        wp_enqueue_style("style-rtl");
    else: //
        wp_register_style("sunnah",  "https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css");
        wp_enqueue_style("sunnah");
        wp_register_style("style", get_template_directory_uri() . "/assets/style.css");
        wp_enqueue_style("style");
    endif;

    wp_register_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css");
    wp_enqueue_style("font-awesome"); 
}
add_action('wp_enqueue_scripts', 'slncb_load_css');

 


function slncb_load_js()
{ 

    wp_register_script('sunnahjs', get_template_directory_uri() . "/assets/dist/js/bootstrap.js", false, false, true); 

    wp_enqueue_script('sunnahjs'); 
}

add_action('wp_enqueue_scripts', 'slncb_load_js');


 


function themename_post_formats_setup()
{
    add_theme_support('post-formats', array('aside', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video', 'audio'));
}
add_action('after_setup_theme', 'themename_post_formats_setup');

/**
 * the support menu
 */
function sunnah_setup()
{
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Twenty Nineteen, use a find and replace
     * to change 'sunnah' to the name of your theme in all the template files.
     */
    //load_theme_textdomain( 'sunnah', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1568, 9999);

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(
        array(
            'menu-1' => __('Primary', 'sunnah'),
            'footer' => __('Footer Menu', 'sunnah') 
        )
    );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
            'navigation-widgets',
        )
    );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 190,
            'width'       => 190,
            'flex-width'  => false,
            'flex-height' => false,
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for Block Styles.
    add_theme_support('wp-block-styles');

    // Add support for full and wide align images.
    add_theme_support('align-wide');

    // Add support for editor styles.
    add_theme_support('editor-styles');

    // Enqueue editor styles.
    add_editor_style('style-editor.css');

    // Add custom editor font sizes.
    add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name'      => __('Small', 'sunnah'),
                'shortName' => __('S', 'sunnah'),
                'size'      => 19.5,
                'slug'      => 'small',
            ),
            array(
                'name'      => __('Normal', 'sunnah'),
                'shortName' => __('M', 'sunnah'),
                'size'      => 22,
                'slug'      => 'normal',
            ),
            array(
                'name'      => __('Large', 'sunnah'),
                'shortName' => __('L', 'sunnah'),
                'size'      => 36.5,
                'slug'      => 'large',
            ),
            array(
                'name'      => __('Huge', 'sunnah'),
                'shortName' => __('XL', 'sunnah'),
                'size'      => 49.5,
                'slug'      => 'huge',
            ),
        )
    );

    // Editor color palette.
    add_theme_support(
        'editor-color-palette',
        array(

            array(
                'name'  => __('Dark Gray', 'sunnah'),
                'slug'  => 'dark-gray',
                'color' => '#111',
            ),
            array(
                'name'  => __('Light Gray', 'sunnah'),
                'slug'  => 'light-gray',
                'color' => '#767676',
            ),
            array(
                'name'  => __('White', 'sunnah'),
                'slug'  => 'white',
                'color' => '#FFF',
            ),
        )
    );

    // Add support for responsive embedded content.
    add_theme_support('responsive-embeds');

    // Add support for custom line height.
    add_theme_support('custom-line-height');
}

add_action('after_setup_theme', 'sunnah_setup');


function gutenberg_setup()
{
    // Support Featured Images
    add_theme_support('post-thumbnails');

    //Gutenberg
    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('dark-editor-style');
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'gutenberg_setup');

add_theme_support('title-tag');
add_theme_support('custom-logo', array(
    'height' => 480,
    'width'  => 720,
));


add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));

register_nav_menus(
    array( 
        "primary" =>  "primary menu" 
    )
);


 
 

/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init()
{
    register_sidebar(array(
        'name'          => __('main sidebar', 'sunnah'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets in this area will be shown what you select.', 'sunnah'),
        'before_widget' => '<div id="%1$s" class="widget %2$s bg-white shadow m-0 py-0 px-2 border-0 rounded-0  ">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    )); 
}
add_action('widgets_init', 'wpdocs_theme_slug_widgets_init');


 
 



function prefix_category_title($title)
{
    if (is_category()) {
        $title = single_cat_title('', false);
    }
    return $title;
}
add_filter('get_the_archive_title', 'prefix_category_title');
 

function InSlider_box()
{
    $screen = array('post');

    add_meta_box(
        'InSlider_box_2',       // $id
        'InSlider',                  // $title
        'InSlider_box_inp',  // $callback
        $screen,                  // $post
        'side'

    );
}


add_action("add_meta_boxes", "InSlider_box");


add_action('save_post', 'save_InSlider_box');





 

 



function save_InSlider_box($post_id)
{
    global $post;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {


        return $post_id;
    }


    $InSlider = $_POST['InSlider'] ?? 0;

    update_post_meta($post_id, 'InSlider', $InSlider);
}



function InSlider_box_inp($post)
{
    global $post;

    $data = get_post_custom($post->ID);
    $InSlider = isset($data['InSlider']) ? esc_attr($data['InSlider'][0]) : 0;

    if ($InSlider == 1) {
        $args = '<option value="1"> In slider</option> <option value="0"   > Not in slider</option>';
    } else {
        $args = '<option value="0"   > Not in slider</option> <option value="1"> In slider</option>';
    }

?>

    <select name="InSlider" id="InSlider">
        <?php echo $args; ?>
    </select>

<?php
}




function get_post_cats($id)
{

    $categories = get_the_category($id);

    $data = '';
    foreach ($categories as $cat) {

        if (count($categories)  == 1) {
            $data .= 'Category: ' . $cat->name;
        } elseif ($categories > 1) {
            $data .= 'Categories: ' . $cat->name . ',';
        } else {
            $data .= 'No Category';
        }
    }

    return $data;
}

 