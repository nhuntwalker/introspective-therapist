$(document).ready(function(){
	var has_children = $("#menu_bar .menu-item-has-children");
	
	has_children.mouseover(function(){
		var position = $(this).offset(),
			sub_item = $(this).find(".sub-menu");
			
			sub_item.css("display", "block").offset({
				top: position["top"] + $(this).outerHeight(),
				left: position["left"]	
			});
		
	});
	has_children.mouseout(function(){
		$(this).find(".sub-menu").css("display", "none");
	});
});