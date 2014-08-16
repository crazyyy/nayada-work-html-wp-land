// DOM Ready
$(function() {
	
	// SVG fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		var dotSVG = /.*\.svg$/;
		for (var i = 0; i != imgs.length; ++i) {
			if(imgs[i].src.match(dotSVG)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + "png";
			}
		}
	}

});
// tabs 
// https://github.com/aarondo/tabulous.js
$(document).ready(function ($) {
    $('#tabs').tabulous();  
});
// menu scroll 
//https://github.com/alvarotrigo/Front-end--jQuery--CSS-/tree/master/staticMenu
;$(document).ready(function(){
	
	//by default, the static menu is hidden
	var showStaticMenuBar = false;

	//when scrolling...
	$(window).scroll(function() {
		//if the static menu is not yet visible...
		if(showStaticMenuBar == false){
			//if we scroll more than 40px, we show it 
			if($(window).scrollTop() >= 1080){
				//showing the static menu
				document.getElementById("staticHeader").style.display = "block";
				$( ".blue-bg" ).addClass( "visible" );
				$( ".logo-block" ).addClass( "visible" );
				
				//hidding the normal one 
				document.getElementById("header").style.display = "none";

				//we define it as showed
				showStaticMenuBar=true;
			}
		}
		//if the static menu is already visible...
		else{
			//if we didnt scroll more than 40 px... lets hide it!!
			if($(window).scrollTop() <= 1080){
				//hidding the static menu one 
				document.getElementById("staticHeader").style.display = "none";
				$( ".blue-bg" ).removeClass( "visible" );
				$( ".logo-block" ).removeClass( "visible" );

				//showing the normal one 
				document.getElementById("header").style.display = "block";

				//we define it as hidden
				showStaticMenuBar=false;
			}	
		}
	}
	);
});