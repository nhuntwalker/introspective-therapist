<?php
/*
* Template Name: Oppression Sidebar
*/
get_header(); 
?>
	<?php
	echo the_small_banner(get_site_url()."/imgs/banner2_med.jpg");
	?>

	<?php if (have_posts()): 
		while (have_posts()) : the_post();
	?>
	<div id="all_content_inner">
        <div id="sidebar">
        <?php
                    wp_nav_menu(array(
                      "theme_location" => "oppression_menu",
                      "menu_id" => "oppression_menu",
                      "menu_class" => "simple_menu",
                      "items_wrap" => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                    ));
                ?>
        <?php sidebar_contact(); ?>
        </div>
        <div id="primary" class="content sidebar">
            <h2><?php echo get_the_title() ?></h2> 
                <?php
                the_content();
                ?>
        </div>
    </div>
	<?php endwhile;
	endif; 
	?>

<?php 
get_footer(); ?>