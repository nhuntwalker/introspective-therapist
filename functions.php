<?php


register_nav_menus(array(
	"primary_menu" => __( 'Primary Menu'),
	"mobile_menu" => __("Mobile Menu"),
	"sub_menu" => __("Header Sub Menu"),
	"footer_menu1" => __("Footer Menu 1"),
	"footer_menu2" => __("Footer Menu 2"),
	"footer_menu3" => __("Footer Menu 3"),
	"services_menu" => __("Services Menu"),
	"oppression_menu" => __("Oppression Menu"),
	"about_menu" => __("About Menu")
));
wp_enqueue_style("mentalhealth_style", get_template_directory_uri().'/style.css');
wp_enqueue_style("mentalhealth_mobile", get_template_directory_uri().'/handheld.css', array(), false, "only screen and (max-device-width:480px)");


wp_register_script('active_menu', get_template_directory_uri().'/js/active_menu.js');
wp_enqueue_script('active_menu');
wp_register_script('mobile_menu', get_template_directory_uri().'/js/mobile_js.js');
wp_enqueue_script('mobile_menu');


add_theme_support("post-thumbnails");

function the_banner($image, $tagline=NULL){
	$output = <<<EOD
	<div id="banner">
	<img src={$image} />
EOD;
	if ($tagline) {
		$output .= "<div id='tagline'><div id='tagline_text'>{$tagline}</div></div>";
	}
	$output .= <<<EOD
	</div>
EOD;

	return $output;
}

function the_small_banner($image){
	$output = <<<EOD
	<div id="small_banner">
	<img src={$image} />
	</div>
EOD;

	return $output;

}

function new_excerpt_more($excerpt) {
	return "...<br /><div class='read_more_wrapper'><a class='read_more' href='".get_permalink(get_the_ID())."'>".__("Read More")."</a></div>";
}
add_filter('excerpt_more', 'new_excerpt_more');

function contact_btn(){
	$output = "<a href=" . get_site_url() . "/contact" . " class='rel_pos' id='contact-btn-wrapper'>";
	$output .= <<<EOD
                <div id="contact-btn">
                <span id="contact-name">Contact Kye</span><br />
                1-205-775-0502<br />
                <span id="contact-btn-email">kyeisha.hodge@gmail.com</span>
                </div>
                </a>
EOD;

	echo $output;
}

function sidebar_contact(){
	$output = "<a href=" . get_site_url() . "/contact" . " class='rel_pos' id='sidebar-btn-wrapper'>";
	$output .= <<<EOD
                <div id="contact-btn">
                <span id="contact-name">Contact Kye</span><br />
                1-205-775-0502<br />
                kyeisha.hodge@gmail.com
                </div>
                </a>
EOD;

	echo $output;
}

// [read-more link="the-link"]
function readmore_func( $atts ){
	$a = shortcode_atts(array(
		"link" => "#"
	), $atts);
	
	$output = <<<EOD
	<a class="read_more_link" href="{$a['link']}">
		<div class="read_more_button">
			Read More
		</div>
	</a>
EOD;

	return $output;
}
add_shortcode( 'read-more', 'readmore_func' );

// [share_buttons]
function share_func( $atts ){
	$a = shortcode_atts(array(
		"facebook" => "#",
		"eventbrite" => "#"
	), $atts);
	
	$output = <<<EOD
	<div class="share_link_wrapper">
	<a class="facebook_link" href="{$a['facebook']}">
		<img src="http://www.rationalwhimsy.com/khodgedev/imgs/find-us-facebook.png" class="facebook_button share_button"/>
	</a>
	<a class="eventbrite_link" href="{$a['eventbrite']}">
		<img src="http://www.rationalwhimsy.com/khodgedev/imgs/eventbrite_button.png" class="eventbrite_button share_button"/>
	</a>
	</div>
EOD;

	return $output;
}
add_shortcode( 'share_buttons', 'share_func' );

// [contact_button]
function big_contact($atts){
	$output = "<div class='rel_pos big-btn-wrapper'>";
	$output .= <<<EOD
					<div class="contact-btn">
EOD;
	$output .= "<img src='" . get_site_url()."/imgs/phone_icon_white.svg' class='contact_img' /><br/>";
	$output .= <<<EOD
						1-205-775-0502
					</div>
                </div>
EOD;
	$output .= "<div class='rel_pos big-btn-wrapper'>";
	$output .= <<<EOD
					<div class="contact-btn">
EOD;
	$output .= "<a href='mailto:kyeisha.hodge@gmail.com'><img src='" . get_site_url()."/imgs/mail_icon_white.svg' class='contact_img' /></a><br/>";
	$output .= <<<EOD
						<a href="mailto:kyeisha.hodge@gmail.com">kyeisha.hodge@gmail.com</a>
					</div>
                </div>
EOD;

	echo $output;
}
add_shortcode("contact_button", "big_contact");

?>