<?php
/**
 * Stock Photos functions and definitions
 *
 * @package Stock Photos
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

/* Theme Setup */
if ( ! function_exists( 'stock_photos_setup' ) ) :

function stock_photos_setup() {

	$GLOBALS['content_width'] = apply_filters( 'stock_photos_content_width', 640 );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('stock-photos-homepage-thumb',240,145,true);
	
   	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'stock-photos' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	
	add_theme_support ('html5', array (
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

	add_theme_support('responsive-embeds');

	/* Selective refresh for widgets */
	add_theme_support( 'customize-selective-refresh-widgets' );

	/* Starter Content */
	add_theme_support( 'starter-content', array(
		'widgets' => array(
			'sidebar-1' => array(
				'text_business_info',
				'search',
				'text_about',
			),
			'sidebar-2' => array(
				'text_business_info',
			),
			'sidebar-3' => array(
				'text_about',
				'search',
			),
			'footer-1' => array(
				'text_about',
			),
			'footer-2' => array(
				'archives',
			),
			'footer-3' => array(
				'text_business_info',
			),
			'footer-4' => array(
				'search',
			),
		),

		'posts' => array(
			'home',
			'about' => array(
				'thumbnail' => '{{image-espresso}}',
			),
			'contact' => array(
				'thumbnail' => '{{image-coffee}}',
			),
			'blog' => array(
				'thumbnail' => '{{image-coffee}}',
			),
		),

		'theme_mods' => array(
			'stock_photos_call' => __('9874563210', 'stock-photos' ),
			'stock_photos_mail' => __('example@gmail.com', 'stock-photos' ),
			'stock_photos_time' => __('Mon to Fri 8:00am-5:00pm', 'stock-photos' ),
			'stock_photos_request_btn_text' => __('Request A Rate', 'stock-photos' ),
			'stock_photos_request_btn_url' => '#',
			'stock_photos_facebook_url' => 'www.facebook.com',
			'stock_photos_twitter_url' => 'www.twitter.com',
			'stock_photos_google_url' => 'www.googleplus.com',
			'stock_photos_linkdin_url' => 'www.linkedin.com',
			'stock_photos_youtube_url' => 'www.youtube.com',
			'stock_photos_footer_copy' => __('By ThemesCaliber', 'stock-photos' )
		),

		'nav_menus' => array(
			'primary' => array(
				'name' => __( 'Primary Menu', 'stock-photos' ),
				'items' => array(
					'page_home',
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
		),
    ));

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', stock_photos_font_url() ) );
}
endif;
add_action( 'after_setup_theme', 'stock_photos_setup' );

/* Theme Widgets Setup */
function stock_photos_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'stock-photos' ),
		'description'   => __( 'Appears on blog page sidebar', 'stock-photos' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'stock-photos' ),
		'description'   => __( 'Appears on page sidebar', 'stock-photos' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'         => __( 'Third Column Sidebar', 'stock-photos' ),
		'description' => __( 'Appears on page sidebar', 'stock-photos' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$stock_photos_widget_areas = get_theme_mod('stock_photos_footer_widget_layout', '4');
	for ($i=1; $i<=$stock_photos_widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer Nav ', 'stock-photos' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s py-2">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
}
add_action( 'widgets_init', 'stock_photos_widgets_init' );

/* Theme Font URL */
function stock_photos_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Unica One';
	$font_family[] = 'Comfortaa:300,400,500,600,700';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function stock_photos_scripts() {
	wp_enqueue_style( 'stock-photos-font', stock_photos_font_url(), array() );
	wp_enqueue_style( 'bootstrap-css', esc_url(get_template_directory_uri()).'/css/bootstrap.css' );
	wp_enqueue_style( 'stock-photos-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'stock-photos-style', 'rtl', 'replace' );
	wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri()).'/css/fontawesome-all.css' );
	wp_enqueue_style( 'owl-carousel-css', esc_url(get_template_directory_uri()).'/css/owl.carousel.css' );
	wp_enqueue_style( 'stock-photos-block-style', esc_url(get_template_directory_uri()).'/css/block-style.css' );

	// Paragraph
    $stock_photos_paragraph_color = get_theme_mod('stock_photos_paragraph_color', '');
    $stock_photos_paragraph_font_family = get_theme_mod('stock_photos_paragraph_font_family', '');
    $stock_photos_paragraph_font_size = get_theme_mod('stock_photos_paragraph_font_size', '');
	// "a" tag
	$stock_photos_atag_color = get_theme_mod('stock_photos_atag_color', '');
    $stock_photos_atag_font_family = get_theme_mod('stock_photos_atag_font_family', '');
	// "li" tag
	$stock_photos_li_color = get_theme_mod('stock_photos_li_color', '');
    $stock_photos_li_font_family = get_theme_mod('stock_photos_li_font_family', '');
	// H1
	$stock_photos_h1_color = get_theme_mod('stock_photos_h1_color', '');
    $stock_photos_h1_font_family = get_theme_mod('stock_photos_h1_font_family', '');
    $stock_photos_h1_font_size = get_theme_mod('stock_photos_h1_font_size', '');
	// H2
	$stock_photos_h2_color = get_theme_mod('stock_photos_h2_color', '');
    $stock_photos_h2_font_family = get_theme_mod('stock_photos_h2_font_family', '');
    $stock_photos_h2_font_size = get_theme_mod('stock_photos_h2_font_size', '');
	// H3
	$stock_photos_h3_color = get_theme_mod('stock_photos_h3_color', '');
    $stock_photos_h3_font_family = get_theme_mod('stock_photos_h3_font_family', '');
    $stock_photos_h3_font_size = get_theme_mod('stock_photos_h3_font_size', '');
	// H4
	$stock_photos_h4_color = get_theme_mod('stock_photos_h4_color', '');
    $stock_photos_h4_font_family = get_theme_mod('stock_photos_h4_font_family', '');
    $stock_photos_h4_font_size = get_theme_mod('stock_photos_h4_font_size', '');
	// H5
	$stock_photos_h5_color = get_theme_mod('stock_photos_h5_color', '');
    $stock_photos_h5_font_family = get_theme_mod('stock_photos_h5_font_family', '');
    $stock_photos_h5_font_size = get_theme_mod('stock_photos_h5_font_size', '');
	// H6
	$stock_photos_h6_color = get_theme_mod('stock_photos_h6_color', '');
    $stock_photos_h6_font_family = get_theme_mod('stock_photos_h6_font_family', '');
    $stock_photos_h6_font_size = get_theme_mod('stock_photos_h6_font_size', '');

	$stock_photos_custom_css ='
		p,span{
		    color:'.esc_attr($stock_photos_paragraph_color).'!important;
		    font-family: '.esc_attr($stock_photos_paragraph_font_family).'!important;
		    font-size: '.esc_attr($stock_photos_paragraph_font_size).'!important;
		}
		a{
		    color:'.esc_attr($stock_photos_atag_color).'!important;
		    font-family: '.esc_attr($stock_photos_atag_font_family).';
		}
		li{
		    color:'.esc_attr($stock_photos_li_color).'!important;
		    font-family: '.esc_attr($stock_photos_li_font_family).';
		}
		h1{
		    color:'.esc_attr($stock_photos_h1_color).'!important;
		    font-family: '.esc_attr($stock_photos_h1_font_family).'!important;
		    font-size: '.esc_attr($stock_photos_h1_font_size).'!important;
		}
		h2{
		    color:'.esc_attr($stock_photos_h2_color).'!important;
		    font-family: '.esc_attr($stock_photos_h2_font_family).'!important;
		    font-size: '.esc_attr($stock_photos_h2_font_size).'!important;
		}
		h3{
		    color:'.esc_attr($stock_photos_h3_color).'!important;
		    font-family: '.esc_attr($stock_photos_h3_font_family).'!important;
		    font-size: '.esc_attr($stock_photos_h3_font_size).'!important;
		}
		h4{
		    color:'.esc_attr($stock_photos_h4_color).'!important;
		    font-family: '.esc_attr($stock_photos_h4_font_family).'!important;
		    font-size: '.esc_attr($stock_photos_h4_font_size).'!important;
		}
		h5{
		    color:'.esc_attr($stock_photos_h5_color).'!important;
		    font-family: '.esc_attr($stock_photos_h5_font_family).'!important;
		    font-size: '.esc_attr($stock_photos_h5_font_size).'!important;
		}
		h6{
		    color:'.esc_attr($stock_photos_h6_color).'!important;
		    font-family: '.esc_attr($stock_photos_h6_font_family).'!important;
		    font-size: '.esc_attr($stock_photos_h6_font_size).'!important;
		}'
	;
	wp_add_inline_style( 'stock-photos-basic-style',$stock_photos_custom_css );

	require get_parent_theme_file_path( '/tc-style.php' );
	wp_add_inline_style( 'stock-photos-basic-style',$stock_photos_custom_css );

	wp_enqueue_script( 'bootstrap-js', esc_url(get_template_directory_uri()) . '/js/bootstrap.js' );
	wp_enqueue_script( 'owl-carousel-js', esc_url(get_template_directory_uri()) . '/js/owl.carousel.js' );
	wp_enqueue_script( 'stock-photos-custom-jquery', esc_url(get_template_directory_uri()) . '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'jquery-superfish', esc_url(get_template_directory_uri()) . '/js/jquery.superfish.js', array('jquery') ,'',true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if (is_page_template( 'page-template/custom-frontpage.php' )) {
		wp_enqueue_script( 'stock-photos-slider-jquery', esc_url(get_template_directory_uri()) . '/js/category-slider.js', array('jquery') );
	}
}
add_action( 'wp_enqueue_scripts', 'stock_photos_scripts' );

/*radio button sanitization*/

function stock_photos_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/* Excerpt Limit Begin */
function stock_photos_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'stock_photos_loop_columns');
if (!function_exists('stock_photos_loop_columns')) {
	function stock_photos_loop_columns() {
		$columns = get_theme_mod( 'stock_photos_products_per_row', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'stock_photos_shop_per_page', 9 );
function stock_photos_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'stock_photos_product_per_page', 9 );
	return $cols;
}

function stock_photos_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function stock_photos_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

/** Posts navigation. */
if ( ! function_exists( 'stock_photos_post_navigation' ) ) {
	function stock_photos_post_navigation() {
		$stock_photos_pagination_type = get_theme_mod( 'stock_photos_post_navigation_type', 'numbers' );
		if ( $stock_photos_pagination_type == 'numbers' ) {
			the_posts_pagination();
		} else {
			the_posts_navigation( array(
	            'prev_text'          => __( 'Previous page', 'stock-photos' ),
	            'next_text'          => __( 'Next page', 'stock-photos' ),
	            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'stock-photos' ) . ' </span>',
	        ) );
		}
	}
}

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';


function stock_photos_taxonomy_add_custom_field() {
    ?>
    <div class="form-field term-image-wrap">
        <label for="cat-image"><?php echo esc_html( 'Image', 'stock-photos' ); ?></label>
        <p><a href="#" class="stock_photos_upload_image_button button button-secondary"><?php echo esc_html('Upload Image', 'stock-photos'); ?></a></p>
        <input type="text" name="category_image" id="cat-image" value="" size="40" />
    </div>
    <?php
}
add_action( 'category_add_form_fields', 'stock_photos_taxonomy_add_custom_field', 10, 2 );
 
function stock_photos_taxonomy_edit_custom_field($term) {
    $image = get_term_meta($term->term_id, 'category_image', true);
    ?>
    <tr class="form-field term-image-wrap">
        <th scope="row"><label for="category_image"><?php echo esc_html( 'Image', 'stock-photos' ); ?></label></th>
        <td>
            <p><a href="#" class="stock_photos_upload_image_button button button-secondary"><?php echo esc_html('Upload Image', 'stock-photos'); ?></a></p><br/>
            <input type="text" name="category_image" id="cat-image" value="<?php echo esc_attr($image); ?>" size="40" />
        </td>
    </tr>
    <?php
}
add_action( 'category_edit_form_fields', 'stock_photos_taxonomy_edit_custom_field', 10, 2 );

function stock_photos_include_script() {
    if ( ! did_action( 'wp_enqueue_media' ) ) {
        wp_enqueue_media();
    }
    wp_enqueue_script( 'stock-photos-script', get_stylesheet_directory_uri() . '/js/category.js', array('jquery'), null, false );
}
add_action( 'admin_enqueue_scripts', 'stock_photos_include_script' );

function stock_photos_save_taxonomy_custom_meta_field( $term_id ) {
    if ( isset( $_POST['category_image'] ) ) {
        update_term_meta($term_id, 'category_image', wp_unslash( $_POST['category_image']));
    }
}  
add_action( 'edited_category', 'stock_photos_save_taxonomy_custom_meta_field', 10, 2 );  
add_action( 'create_category', 'stock_photos_save_taxonomy_custom_meta_field', 10, 2 );