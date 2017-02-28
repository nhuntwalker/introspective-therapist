<?php
/*
* The footer template
*/
?>		
		</div><!-- close all content -->
<div id="footer">
	<div class="col3">
		  <?php wp_nav_menu(array(
              "theme_location" => "footer_menu1",
              "menu_id" => "",
              "menu_class" => "footer_menu",
              "items_wrap" => '<ul id="%1$s" class="%2$s">%3$s</ul>'
          )); ?>
    </div>
    <div class="col3">
		  <?php wp_nav_menu(array(
              "theme_location" => "footer_menu2",
              "menu_id" => "",
              "menu_class" => "footer_menu",
              "items_wrap" => '<ul id="%1$s" class="%2$s">%3$s</ul>'
          )); ?>
    </div>
    <div class="col3">
		  <?php wp_nav_menu(array(
              "theme_location" => "footer_menu3",
              "menu_id" => "",
              "menu_class" => "footer_menu",
              "items_wrap" => '<ul id="%1$s" class="%2$s">%3$s</ul>'
          )); ?>
    </div>
    <div class="clearfix"></div>
        <div class="copyright">© Kyeisha Hodge LLC, 2015</div>
    <div class="clearfix"></div>
</div>

<div id="mobile_footer">
<span class="copyright">© Kyeisha Hodge LLC, 2015</span>
</div>

	</div> <!-- close main content -->
<?php wp_footer(); ?>
</body>
</html>
