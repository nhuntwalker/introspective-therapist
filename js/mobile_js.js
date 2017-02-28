// JavaScript Document
$(document).ready(function(){
	var mobile_btn = $("#mobile_menu_btn"),
		mobile_menu_container = $("#mobile_menu_bar");
	
	mobile_btn.click(function(){
		var menu_left = mobile_menu_container.offset()["left"];
		if (menu_left == 0) {
			mobile_menu_container.animate({
			"left": "-100%"
		}, 500);
		} else {
			mobile_menu_container.animate({
			"left":0	
		}, 500);

		}
	});
	
	var menu_items = $("#mobile_menu_bar li");
	menu_items.click(function(){
		menu_items.removeClass("selected");
		$(this).addClass("selected");
		redirect($(this).children("a").attr("href"));
	});
});

function redirect(url){
	window.location.assign(url);
}