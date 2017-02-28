// JavaScript Document

var windowWidth = window.outerWidth,
	mainBannerImg = $("#banner img");

if (windowWidth < 480) {
	mainBannerImg.attr("src", "http://introspectivetherapist.com/imgs/banner7_small.jpg");
}	

