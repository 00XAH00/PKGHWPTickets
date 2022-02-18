<?php 
	$stock_photos_custom_css ='';

	/*----------------Width Layout -------------------*/
	$stock_photos_theme_lay = get_theme_mod( 'stock_photos_width_options','Full Layout');
    if($stock_photos_theme_lay == 'Full Layout'){
		$stock_photos_custom_css .='body{';
			$stock_photos_custom_css .='max-width: 100%;';
		$stock_photos_custom_css .='}';
	}else if($stock_photos_theme_lay == 'Contained Layout'){
		$stock_photos_custom_css .='body{';
			$stock_photos_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$stock_photos_custom_css .='}';
	}else if($stock_photos_theme_lay == 'Boxed Layout'){
		$stock_photos_custom_css .='body{';
			$stock_photos_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$stock_photos_custom_css .='}';
	}

	/*------ Button Style -------*/
	$stock_photos_top_buttom_padding = get_theme_mod('stock_photos_top_button_padding');
	$stock_photos_left_right_padding = get_theme_mod('stock_photos_left_button_padding');
	if($stock_photos_top_buttom_padding != false || $stock_photos_left_right_padding != false ){
		$stock_photos_custom_css .='.read-btn a.blogbutton-small, #comments input[type="submit"].submit{';
			$stock_photos_custom_css .='padding-top: '.esc_attr($stock_photos_top_buttom_padding).'px; padding-bottom: '.esc_attr($stock_photos_top_buttom_padding).'px; padding-left: '.esc_attr($stock_photos_left_right_padding).'px; padding-right: '.esc_attr($stock_photos_left_right_padding).'px;';
		$stock_photos_custom_css .='}';
	}

	$stock_photos_button_border_radius = get_theme_mod('stock_photos_button_border_radius');
	$stock_photos_custom_css .='.read-btn a.blogbutton-small, #comments input[type="submit"].submit{';
		$stock_photos_custom_css .='border-radius: '.esc_attr($stock_photos_button_border_radius).'px;';
	$stock_photos_custom_css .='}';

	/*-------------- Woocommerce Button  -------------------*/

	$stock_photos_woocommerce_button_padding_top = get_theme_mod('stock_photos_woocommerce_button_padding_top');
	if($stock_photos_woocommerce_button_padding_top != false){
		$stock_photos_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$stock_photos_custom_css .='padding-top: '.esc_attr($stock_photos_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($stock_photos_woocommerce_button_padding_top).'px;';
		$stock_photos_custom_css .='}';
	}

	$stock_photos_woocommerce_button_padding_right = get_theme_mod('stock_photos_woocommerce_button_padding_right');
	if($stock_photos_woocommerce_button_padding_right != false){
		$stock_photos_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$stock_photos_custom_css .='padding-left: '.esc_attr($stock_photos_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($stock_photos_woocommerce_button_padding_right).'px;';
		$stock_photos_custom_css .='}';
	}

	$stock_photos_woocommerce_button_border_radius = get_theme_mod('stock_photos_woocommerce_button_border_radius');
	if($stock_photos_woocommerce_button_border_radius != false){
		$stock_photos_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$stock_photos_custom_css .='border-radius: '.esc_attr($stock_photos_woocommerce_button_border_radius).'px;';
		$stock_photos_custom_css .='}';
	}

	$stock_photos_related_product = get_theme_mod('stock_photos_related_product',true);

	if($stock_photos_related_product == false){
		$stock_photos_custom_css .='.related.products{';
			$stock_photos_custom_css .='display: none;';
		$stock_photos_custom_css .='}';
	}

	$stock_photos_woocommerce_product_border = get_theme_mod('stock_photos_woocommerce_product_border',true);

	if($stock_photos_woocommerce_product_border == false){
		$stock_photos_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$stock_photos_custom_css .='border: none;';
		$stock_photos_custom_css .='}';
	}

	$stock_photos_woocommerce_product_padding_top = get_theme_mod('stock_photos_woocommerce_product_padding_top',10);
		$stock_photos_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$stock_photos_custom_css .='padding-top: '.esc_attr($stock_photos_woocommerce_product_padding_top).'px; padding-bottom: '.esc_attr($stock_photos_woocommerce_product_padding_top).'px;';
		$stock_photos_custom_css .='}';

	$stock_photos_woocommerce_product_padding_right = get_theme_mod('stock_photos_woocommerce_product_padding_right',10);
		$stock_photos_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$stock_photos_custom_css .='padding-left: '.esc_attr($stock_photos_woocommerce_product_padding_right).'px; padding-right: '.esc_attr($stock_photos_woocommerce_product_padding_right).'px;';
		$stock_photos_custom_css .='}';

	$stock_photos_woocommerce_product_border_radius = get_theme_mod('stock_photos_woocommerce_product_border_radius');
	if($stock_photos_woocommerce_product_border_radius != false){
		$stock_photos_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$stock_photos_custom_css .='border-radius: '.esc_attr($stock_photos_woocommerce_product_border_radius).'px;';
		$stock_photos_custom_css .='}';
	}

	$stock_photos_woocommerce_product_box_shadow = get_theme_mod('stock_photos_woocommerce_product_box_shadow');
	if($stock_photos_woocommerce_product_box_shadow != false){
		$stock_photos_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$stock_photos_custom_css .='box-shadow: '.esc_attr($stock_photos_woocommerce_product_box_shadow).'px '.esc_attr($stock_photos_woocommerce_product_box_shadow).'px '.esc_attr($stock_photos_woocommerce_product_box_shadow).'px #aaa;';
		$stock_photos_custom_css .='}';
	}

	$stock_photos_product_sale_font_size = get_theme_mod('stock_photos_product_sale_font_size');
	$stock_photos_custom_css .='.woocommerce span.onsale {';
		$stock_photos_custom_css .='font-size: '.esc_attr($stock_photos_product_sale_font_size).'px;';
	$stock_photos_custom_css .='}';

	/*---- Preloader Color ----*/
	$stock_photos_preloader_color = get_theme_mod('stock_photos_preloader_color');
	$stock_photos_preloader_bg_color = get_theme_mod('stock_photos_preloader_bg_color');

	if($stock_photos_preloader_color != false){
		$stock_photos_custom_css .='.preloader-squares .square, .preloader-chasing-squares .square{';
			$stock_photos_custom_css .='background-color: '.esc_attr($stock_photos_preloader_color).';';
		$stock_photos_custom_css .='}';
	}
	if($stock_photos_preloader_bg_color != false){
		$stock_photos_custom_css .='.preloader{';
			$stock_photos_custom_css .='background-color: '.esc_attr($stock_photos_preloader_bg_color).';';
		$stock_photos_custom_css .='}';
	}

	/*---- Copyright css ----*/
	$stock_photos_copyright_fontsize = get_theme_mod('stock_photos_copyright_fontsize',16);
	if($stock_photos_copyright_fontsize != false){
		$stock_photos_custom_css .='#footer p{';
			$stock_photos_custom_css .='font-size: '.esc_attr($stock_photos_copyright_fontsize).'px; ';
		$stock_photos_custom_css .='}';
	}

	$stock_photos_copyright_top_bottom_padding = get_theme_mod('stock_photos_copyright_top_bottom_padding',15);
	if($stock_photos_copyright_top_bottom_padding != false){
		$stock_photos_custom_css .='#footer {';
			$stock_photos_custom_css .='padding-top:'.esc_attr($stock_photos_copyright_top_bottom_padding).'px; padding-bottom: '.esc_attr($stock_photos_copyright_top_bottom_padding).'px; ';
		$stock_photos_custom_css .='}';
	}

	$stock_photos_copyright_alignment = get_theme_mod( 'stock_photos_copyright_alignment','Center');
    if($stock_photos_copyright_alignment == 'Left'){
		$stock_photos_custom_css .='#footer p{';
			$stock_photos_custom_css .='text-align:start;';
		$stock_photos_custom_css .='}';
	}else if($stock_photos_copyright_alignment == 'Center'){
		$stock_photos_custom_css .='#footer p{';
			$stock_photos_custom_css .='text-align:center;';
		$stock_photos_custom_css .='}';
	}else if($stock_photos_copyright_alignment == 'Right'){
		$stock_photos_custom_css .='#footer p{';
			$stock_photos_custom_css .='text-align:end;';
		$stock_photos_custom_css .='}';
	}

	/*------- Wocommerce sale css -----*/
	$stock_photos_woocommerce_sale_top_padding = get_theme_mod('stock_photos_woocommerce_sale_top_padding');
	$stock_photos_woocommerce_sale_left_padding = get_theme_mod('stock_photos_woocommerce_sale_left_padding');
	$stock_photos_custom_css .=' .woocommerce span.onsale{';
		$stock_photos_custom_css .='padding-top: '.esc_attr($stock_photos_woocommerce_sale_top_padding).'px; padding-bottom: '.esc_attr($stock_photos_woocommerce_sale_top_padding).'px; padding-left: '.esc_attr($stock_photos_woocommerce_sale_left_padding).'px; padding-right: '.esc_attr($stock_photos_woocommerce_sale_left_padding).'px;';
	$stock_photos_custom_css .='}';

	$stock_photos_woocommerce_sale_border_radius = get_theme_mod('stock_photos_woocommerce_sale_border_radius', 50);
	$stock_photos_custom_css .='.woocommerce span.onsale{';
		$stock_photos_custom_css .='border-radius: '.esc_attr($stock_photos_woocommerce_sale_border_radius).'px;';
	$stock_photos_custom_css .='}';

	$stock_photos_sale_position = get_theme_mod( 'stock_photos_sale_position','right');
    if($stock_photos_sale_position == 'left'){
		$stock_photos_custom_css .='.woocommerce ul.products li.product .onsale{';
			$stock_photos_custom_css .='left: -10px; right: auto;';
		$stock_photos_custom_css .='}';
	}else if($stock_photos_sale_position == 'right'){
		$stock_photos_custom_css .='.woocommerce ul.products li.product .onsale{';
			$stock_photos_custom_css .='left: auto; right: 0;';
		$stock_photos_custom_css .='}';
	}

	/*-------- footer background css -------*/
	$stock_photos_footer_background_color = get_theme_mod('stock_photos_footer_background_color');
	$stock_photos_custom_css .='.footertown{';
		$stock_photos_custom_css .='background-color: '.esc_attr($stock_photos_footer_background_color).';';
	$stock_photos_custom_css .='}';

	$stock_photos_footer_background_img = get_theme_mod('stock_photos_footer_background_img');
	if($stock_photos_footer_background_img != false){
		$stock_photos_custom_css .='.footertown{';
			$stock_photos_custom_css .='background: url('.esc_attr($stock_photos_footer_background_img).') no-repeat; background-size: cover; background-attachment: fixed;';
		$stock_photos_custom_css .='}';
	}

	/*---- Comment form ----*/
	$stock_photos_comment_width = get_theme_mod('stock_photos_comment_width', '100');
	$stock_photos_custom_css .='#comments textarea{';
		$stock_photos_custom_css .=' width:'.esc_attr($stock_photos_comment_width).'%;';
	$stock_photos_custom_css .='}';

	$stock_photos_comment_submit_text = get_theme_mod('stock_photos_comment_submit_text', 'Post Comment');
	if($stock_photos_comment_submit_text == ''){
		$stock_photos_custom_css .='#comments p.form-submit {';
			$stock_photos_custom_css .='display: none;';
		$stock_photos_custom_css .='}';
	}

	$stock_photos_comment_title = get_theme_mod('stock_photos_comment_title', 'Leave a Reply');
	if($stock_photos_comment_title == ''){
		$stock_photos_custom_css .='#comments h2#reply-title {';
			$stock_photos_custom_css .='display: none;';
		$stock_photos_custom_css .='}';
	}

	// Sticky Header padding
	$stock_photos_sticky_header_padding = get_theme_mod('stock_photos_sticky_header_padding');
	$stock_photos_custom_css .='.fixed-header{';
		$stock_photos_custom_css .=' padding-top:'.esc_attr($stock_photos_sticky_header_padding).'px; padding-bottom:'.esc_attr($stock_photos_sticky_header_padding).'px;';
	$stock_photos_custom_css .='}';

	// Navigation Font Size 
	$stock_photos_nav_font_size = get_theme_mod('stock_photos_nav_font_size');
	if($stock_photos_nav_font_size != false){
		$stock_photos_custom_css .='.primary-navigation ul li a{';
			$stock_photos_custom_css .='font-size: '.esc_attr($stock_photos_nav_font_size).'px;';
		$stock_photos_custom_css .='}';
	}

	$stock_photos_navigation_case = get_theme_mod('stock_photos_navigation_case', 'capitalize');
	if($stock_photos_navigation_case == 'uppercase' ){
		$stock_photos_custom_css .='.primary-navigation ul li a{';
			$stock_photos_custom_css .=' text-transform: uppercase;';
		$stock_photos_custom_css .='}';
	}elseif($stock_photos_navigation_case == 'capitalize' ){
		$stock_photos_custom_css .='.primary-navigation ul li a{';
			$stock_photos_custom_css .=' text-transform: capitalize;';
		$stock_photos_custom_css .='}';
	}


	//Site title Font size
	$stock_photos_site_title_fontsize = get_theme_mod('stock_photos_site_title_fontsize');
	$stock_photos_custom_css .='.logo h1, .logo p.site-title{';
		$stock_photos_custom_css .='font-size: '.esc_attr($stock_photos_site_title_fontsize).'px;';
	$stock_photos_custom_css .='}';

	$stock_photos_site_description_fontsize = get_theme_mod('stock_photos_site_description_fontsize');
	$stock_photos_custom_css .='.logo p.site-description{';
		$stock_photos_custom_css .='font-size: '.esc_attr($stock_photos_site_description_fontsize).'px;';
	$stock_photos_custom_css .='}';

	/*----- Featured image css -----*/
	$stock_photos_featured_image_border_radius = get_theme_mod('stock_photos_featured_image_border_radius');
	if($stock_photos_featured_image_border_radius != false){
		$stock_photos_custom_css .='.inner-service .service-image img{';
			$stock_photos_custom_css .='border-radius: '.esc_attr($stock_photos_featured_image_border_radius).'px;';
		$stock_photos_custom_css .='}';
	}

	$stock_photos_featured_image_box_shadow = get_theme_mod('stock_photos_featured_image_box_shadow');
	if($stock_photos_featured_image_box_shadow != false){
		$stock_photos_custom_css .='.inner-service .service-image img{';
			$stock_photos_custom_css .='box-shadow: 8px 8px '.esc_attr($stock_photos_featured_image_box_shadow).'px #aaa;';
		$stock_photos_custom_css .='}';
	} 

	/*------Shop page pagination ---------*/
	$stock_photos_shop_page_pagination = get_theme_mod('stock_photos_shop_page_pagination', true);
	if($stock_photos_shop_page_pagination == false){
		$stock_photos_custom_css .= '.woocommerce nav.woocommerce-pagination {';
			$stock_photos_custom_css .='display: none;';
		$stock_photos_custom_css .='}';
	}

	/*------- Post into blocks ------*/
	$stock_photos_post_blocks = get_theme_mod('stock_photos_post_blocks', 'Without box');
	if($stock_photos_post_blocks == 'Within box' ){
		$stock_photos_custom_css .='.services-box{';
			$stock_photos_custom_css .=' border: 1px solid #222;';
		$stock_photos_custom_css .='}';
	}

	//  ------------ Mobile Media Options ----------
	$stock_photos_responsive_show_back_to_top = get_theme_mod('stock_photos_responsive_show_back_to_top',true);
	if($stock_photos_responsive_show_back_to_top == true && get_theme_mod('stock_photos_show_back_to_top',true) == false){
		$stock_photos_custom_css .='@media screen and (min-width:575px){
			.scrollup{';
			$stock_photos_custom_css .='visibility:hidden;';
		$stock_photos_custom_css .='} }';
	}

	if($stock_photos_responsive_show_back_to_top == false){
		$stock_photos_custom_css .='@media screen and (max-width:575px){
			.scrollup{';
			$stock_photos_custom_css .='visibility:hidden;';
		$stock_photos_custom_css .='} }';
	}

	$stock_photos_responsive_preloader_hide = get_theme_mod('stock_photos_responsive_preloader_hide',false);
	if($stock_photos_responsive_preloader_hide == true && get_theme_mod('stock_photos_preloader_hide',false) == false){
		$stock_photos_custom_css .='@media screen and (min-width:575px){
			.preloader{';
			$stock_photos_custom_css .='display:none !important;';
		$stock_photos_custom_css .='} }';
	}

	if($stock_photos_responsive_preloader_hide == false){
		$stock_photos_custom_css .='@media screen and (max-width:575px){
			.preloader{';
			$stock_photos_custom_css .='display:none !important;';
		$stock_photos_custom_css .='} }';
	}

	// menu font weight
	$stock_photos_theme_lay = get_theme_mod( 'stock_photos_font_weight_menu_option','Defalt');
    if($stock_photos_theme_lay == '100'){
		$stock_photos_custom_css .='.primary-navigation ul li a{';
			$stock_photos_custom_css .='font-weight:100;';
		$stock_photos_custom_css .='}';
	}else if($stock_photos_theme_lay == '200'){
		$stock_photos_custom_css .='.primary-navigation ul li a{';
			$stock_photos_custom_css .='font-weight: 200;';
		$stock_photos_custom_css .='}';
	}else if($stock_photos_theme_lay == '300'){
		$stock_photos_custom_css .='.primary-navigation ul li a{';
			$stock_photos_custom_css .='font-weight: 300;';
		$stock_photos_custom_css .='}';
	}else if($stock_photos_theme_lay == '400'){
		$stock_photos_custom_css .='.primary-navigation ul li a{';
			$stock_photos_custom_css .='font-weight: 400;';
		$stock_photos_custom_css .='}';
	}else if($stock_photos_theme_lay == 'Defalt'){
		$stock_photos_custom_css .='.primary-navigation ul li a{';
			$stock_photos_custom_css .='font-weight: 500;';
		$stock_photos_custom_css .='}';
	}else if($stock_photos_theme_lay == '600'){
		$stock_photos_custom_css .='.primary-navigation ul li a{';
			$stock_photos_custom_css .='font-weight: 600;';
		$stock_photos_custom_css .='}';
	}else if($stock_photos_theme_lay == '700'){
		$stock_photos_custom_css .='.primary-navigation ul li a{';
			$stock_photos_custom_css .='font-weight: 700;';
		$stock_photos_custom_css .='}';
	}else if($stock_photos_theme_lay == '800'){
		$stock_photos_custom_css .='.primary-navigation ul li a{';
			$stock_photos_custom_css .='font-weight: 800;';
		$stock_photos_custom_css .='}';
	}else if($stock_photos_theme_lay == '900'){
		$stock_photos_custom_css .='.primary-navigation ul li a{';
			$stock_photos_custom_css .='font-weight: 900;';
		$stock_photos_custom_css .='}';
	}