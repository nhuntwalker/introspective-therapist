<?php
/*
* Template Name: Specialty
*/
get_header(); 
?>
	<?php
	echo the_small_banner(get_site_url()."/imgs/banner2.jpeg");?>

	<div id="primary" class="content">

	<?php
	echo "<h2>".get_the_title()."</h2>"; 
	
	$args = array(
		"post_type" => "specialty",
		"orderby" => "date",
		"order" => "ASC"
	);
	$query = new WP_Query($args);?>
	<div id="specialty_wrap">
	<?php
	if ($query->have_posts()): 
		while ($query->have_posts()) : $query->the_post();
	?>
		<div class="specialty">
			<div class="specialty_inner">
				<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile;
	endif; 
	wp_reset_postdata();
	?>
    </div>
	</div>

<?php 
get_footer(); ?>