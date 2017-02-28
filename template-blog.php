<?php
/*
* Template Name: Blog
*/
get_header(); 
?>
	<?php
	echo the_small_banner(get_site_url()."/imgs/banner2_med.jpg");
	?>
    
	<div id="primary" class="content">
        <h2><?php the_title();?></h2>
    
    <?php 
	$args = array(
	"post_type" => "post",
	"posts_per_page" => 4,
	"paged" => get_query_var("paged")
	);
	
	$blog_query = new WP_Query($args);
	
	if ($blog_query->have_posts()) {
		while ($blog_query->have_posts()){
			$blog_query->the_post();
			?>
            <div id="post-<?php echo the_ID(); ?>" class="blog_item">
            	<div class="post_title">
                	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <span class="post_date"><a href="<?php the_permalink(); ?>"><?php the_time('F j, Y'); ?></a></span>
                </div>
                <div class="post_excerpt">
                	<p><?php the_excerpt(); ?></p>
                </div>
            </div>
            
            <?php
		}
	}
	?>
    <div class="clearfix gap40"></div>
    <div class="blog_pagination">
    
    	<?php if (get_query_var("paged")>1) {?>
      	<div class="paged newer">
		
		<?php 
			previous_posts_link("Newer Entries");
        ?>
    	</div>
        <?php }?>
        
    <?php
	
	$n_pages = $blog_query->max_num_pages;
	
	/*for ($ii=1; $ii <= $n_pages; $ii++){
		echo "<div class='paged'><a href='".get_site_url()."/blog/page/".$ii."'>".$ii."</a></div>";
	}*/
	
	$paged = get_query_var("paged");
	
	if ($paged > 1) {
		echo "<div class='paged'><a href='".get_site_url()."/blog/page/".($paged - 1)."'>".($paged - 1)."</a></div>";
		echo "<div class='paged selected'><a href='".get_site_url()."/blog/page/".($paged)."'>".($paged)."</a></div>";
		if ($paged < $n_pages) {
			echo "<div class='paged'><a href='".get_site_url()."/blog/page/".($paged + 1)."'>".($paged + 1)."</a></div>";
		}
	} else if ($paged == 0) {
		echo "<div class='paged selected'><a href='".get_site_url()."/blog/page/".($paged + 1)."'>".($paged + 1)."</a></div>";
		echo "<div class='paged'><a href='".get_site_url()."/blog/page/".($paged + 2)."'>".($paged + 2)."</a></div>";
	}
	
		if (get_query_var("paged") < $n_pages) {
	?>
    	<div class="paged older">
    <?php
	next_posts_link("Older Entries", $n_pages); 
	?>
	</div>
	<?php
		}
	wp_reset_postdata();
	?>
    	
    </div>
    </div>

<?php 
get_footer(); ?>