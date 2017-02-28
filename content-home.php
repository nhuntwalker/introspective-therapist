<?php

?>
<div class="content_left">
<h2>Services</h2>
<div class="left_roll"></div>
	<ul class="side_post_roll">
    <li>
    	<div class="side_roll_icon" style="width: 50px; margin-left: -12px; margin-right: 11px;"><img src="<?php echo get_site_url()."/imgs/couch_icon.svg"; ?>" /></div><h3>Theraputic Services</h3>
   	</li>
    <li>
    	<div class="side_roll_icon"><img src="<?php echo get_site_url()."/imgs/phone_icon.svg"; ?>" /></div><h3>Private Consultations</h3>
    </li>
    <li>
    	<div class="side_roll_icon"><img src="<?php echo get_site_url()."/imgs/therapy_icon.svg"; ?>" /></div><h3>Therapy for Therapists</h3>
    </li>
    <!--<li>
    	<div class="side_roll_icon"><img src="<?php echo get_site_url()."/imgs/speaking_icon.svg"; ?>" /></div><h3>Speaking Engagements</h3>
    </li>-->
    </ul>
</div>
<!--<?php 
	$args = array(
		"post_type" => "post",
		"orderby" => "date",
		"order" => "desc",
		"posts_per_page" => 3
	);
	
	$blog_roll = new WP_Query($args);
	
	echo "<div class='left_roll'><ul class='side_post_roll'>";
	if ($blog_roll->have_posts()) {
		while ($blog_roll->have_posts()) {
			$blog_roll->the_post();
			echo "<li>";
			echo "<h3><a href='".get_the_permalink()."'>".get_the_title()."</a></h3>";
			echo "<span class='post_date'><a href='".get_the_permalink()."'>".get_the_time('F j, Y')."</a></span>";
			echo "</li>";
		}
	}
	
	echo "</ul></div>";
	
	wp_reset_postdata();
?>-->
</div>
<?php contact_btn(); ?>
<div class="content_right">
<h2>
	<?php echo get_the_title() ?>
</h2>
<?php
	the_content();
?>

</div>
<div class="clearfix"></div>