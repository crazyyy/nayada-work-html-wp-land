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
/*!
 * strength.js
 * Original author: @aaronlumsden
 * Further changes, comments: @aaronlumsden
 * Licensed under the MIT license
 */
;(function ( $, window, document, undefined ) {

    var pluginName = "tabulous",
        defaults = {
            effect: 'scale'
        };
       // $('<style>body { background-color: red; color: white; }</style>').appendTo('head');
    function Plugin( element, options ) {
        this.element = element;
        this.$elem = $(this.element);
        this.options = $.extend( {}, defaults, options );
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
    }
    Plugin.prototype = {

        init: function() {

            var links = this.$elem.find('a');
            var firstchild = this.$elem.find('li:first-child').find('a');
            var lastchild = this.$elem.find('li:last-child').after('<span class="tabulousclear"></span>');

            if (this.options.effect == 'scale') {
             tab_content = this.$elem.find('div').not(':first').not(':nth-child(1)').addClass('hidescale');
            } else if (this.options.effect == 'slideLeft') {
                 tab_content = this.$elem.find('div').not(':first').not(':nth-child(1)').addClass('hideleft');
            } else if (this.options.effect == 'scaleUp') {
                 tab_content = this.$elem.find('div').not(':first').not(':nth-child(1)').addClass('hidescaleup');
            } else if (this.options.effect == 'flip') {
                 tab_content = this.$elem.find('div').not(':first').not(':nth-child(1)').addClass('hideflip');
            }

            var firstdiv = this.$elem.find('#tabs_container');
            var firstdivheight = firstdiv.find('div:first').height();

            var alldivs = this.$elem.find('div:first').find('div');

            alldivs.css({'position': 'absolute','top':'40px'});

            firstdiv.css('height',firstdivheight+'px');

            firstchild.addClass('tabulous_active');

            links.bind('click', {myOptions: this.options}, function(e) {
                e.preventDefault();

                var $options = e.data.myOptions;
                var effect = $options.effect;

                var mythis = $(this);
                var thisform = mythis.parent().parent().parent();
                var thislink = mythis.attr('href');

                firstdiv.addClass('transition');

                links.removeClass('tabulous_active');
                mythis.addClass('tabulous_active');
                thisdivwidth = thisform.find('div'+thislink).height();

                if (effect == 'scale') {
                    alldivs.removeClass('showscale').addClass('make_transist').addClass('hidescale');
                    thisform.find('div'+thislink).addClass('make_transist').addClass('showscale');
                } else if (effect == 'slideLeft') {
                    alldivs.removeClass('showleft').addClass('make_transist').addClass('hideleft');
                    thisform.find('div'+thislink).addClass('make_transist').addClass('showleft');
                } else if (effect == 'scaleUp') {
                    alldivs.removeClass('showscaleup').addClass('make_transist').addClass('hidescaleup');
                    thisform.find('div'+thislink).addClass('make_transist').addClass('showscaleup');
                } else if (effect == 'flip') {
                    alldivs.removeClass('showflip').addClass('make_transist').addClass('hideflip');
                    thisform.find('div'+thislink).addClass('make_transist').addClass('showflip');
                }
                firstdiv.css('height',thisdivwidth+'px');
            });
        },
        yourOtherFunction: function(el, options) {
            // some logic
        }
    };
    // A really lightweight plugin wrapper around the constructor,
    // preventing against multiple instantiations
    $.fn[pluginName] = function ( options ) {
        return this.each(function () {
            new Plugin( this, options );
        });
    };
})( jQuery, window, document );

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