<?php 
/* 
* The main template file
*
*/


get_header(); 
?>
	<?php
	if (is_front_page()) {
		echo the_banner(get_site_url()."/imgs/banner7_med.jpg", "Conquer and Heal Through Introspection"); // height 360px, top -14%
	} else {
		echo the_small_banner(get_site_url()."/imgs/banner2_med.jpg");
	}
	?>
	<?php if (have_posts()): 
		while (have_posts()) : the_post();
	?>
		<?php 
		if (is_front_page()) {
			?><div id="primary" class="content homepage"><?php
			get_template_part("content","home"); 
			} else { ?>
			<div id="primary" class="content">
		<h2><?php echo get_the_title() ?></h2> 
			<?php
			the_content();
		}
		?>
	</div>
	<?php endwhile;
	endif; ?>

<?php 
get_footer(); ?>