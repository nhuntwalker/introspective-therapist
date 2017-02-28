<?php
/*
* The header template
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--<meta name="google-site-verification" content="6K58KtoiV3q8VO815rwCbLkYo51PezZmsZE93gAEef0" />-->
    <meta name="google-site-verification" content="9AuZw6c00ihPAz-9Zq2EWGYEMJjoAFtztyMAbZId4UE" />
	<title>Kyeisha Hodge</title>
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>
<body id="site_body">
	<div id="main"><!-- open main content -->
		<div id="menu_bar">
		<?php wp_nav_menu(array(
			"theme_location" => "primary_menu",
			"menu_id" => "menu",
			"menu_class" => "the_menu",
			"items_wrap" => '<ul id="%1$s" class="%2$s">%3$s</ul>'
		)); ?>
        </div>
        <div id="mobile_topnav">
        	<div id="mobile_title">
            	Introspective Therapist
            </div> 
               
        	<div id="mobile_menu_btn" class="right">
            	<div class="mobile_bar"></div>
            	<div class="mobile_bar"></div>
            	<div class="mobile_bar"></div>
            </div>
        </div>
       	<div id="mobile_menu_bar">
			<?php
            	wp_nav_menu(array(
				  "theme_location" => "mobile_menu",
				  "menu_id" => "mobile_menu",
				  "menu_class" => "the_menu",
				  "items_wrap" => '<ul id="%1$s" class="%2$s">%3$s</ul>'
				));
			?>        
        </div>

		<?php if (is_front_page()) { ?>
		<div id="id_bar">
			<div id="name_title_home">
				<span id="the_name">Kyeisha Hodge,</span> <span id="cert">LMHCA</span><br/>
				<span id="prof_title_home">Therapist/Consultant/Speaker</span>
			</div>
		</div>
		<?php } else { ?>
        <div id="id_bar">
			<div id="name_title">
				<span id="the_name">Kyeisha Hodge,</span> <span id="cert">LMHCA</span>
				<span id="prof_title">Therapist/Consultant/Speaker</span>
			</div>
		</div>

        
        <?php } ?>
		<div class="clearfix"></div>
		<div id="all_content">
