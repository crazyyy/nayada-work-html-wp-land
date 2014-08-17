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


// modal window
// http://dinbror.dk/bpopup/
/*================================================================================
 * @name: bPopup - if you can't get it up, use bPopup
 * @author: (c)Bjoern Klinggaard (twitter@bklinggaard)
 * @demo: http://dinbror.dk/bpopup
 * @version: 0.10.0.min
 ================================================================================*/
 (function(b){b.fn.bPopup=function(z,F){function M(){a.contentContainer=b(a.contentContainer||c);switch(a.content){case "iframe":var d=b('<iframe class="b-iframe" '+a.iframeAttr+"></iframe>");d.appendTo(a.contentContainer);r=c.outerHeight(!0);s=c.outerWidth(!0);A();d.attr("src",a.loadUrl);k(a.loadCallback);break;case "image":A();b("<img />").load(function(){k(a.loadCallback);G(b(this))}).attr("src",a.loadUrl).hide().appendTo(a.contentContainer);break;default:A(),b('<div class="b-ajax-wrapper"></div>').load(a.loadUrl,a.loadData,function(c,d,e){k(a.loadCallback,d);G(b(this))}).hide().appendTo(a.contentContainer)}}function A(){a.modal&&b('<div class="b-modal '+e+'"></div>').css({backgroundColor:a.modalColor,position:"fixed",top:0,right:0,bottom:0,left:0,opacity:0,zIndex:a.zIndex+t}).appendTo(a.appendTo).fadeTo(a.speed,a.opacity);D();c.data("bPopup",a).data("id",e).css({left:"slideIn"==a.transition||"slideBack"==a.transition?"slideBack"==a.transition?f.scrollLeft()+u:-1*(v+s):l(!(!a.follow[0]&&m||g)),position:a.positionStyle||"absolute",top:"slideDown"==a.transition||"slideUp"==a.transition?"slideUp"==a.transition?f.scrollTop()+w:x+-1*r:n(!(!a.follow[1]&&p||g)),"z-index":a.zIndex+t+1}).each(function(){a.appending&&b(this).appendTo(a.appendTo)});H(!0)}function q(){a.modal&&b(".b-modal."+c.data("id")).fadeTo(a.speed,0,function(){b(this).remove()});a.scrollBar||b("html").css("overflow","auto");b(".b-modal."+e).unbind("click");f.unbind("keydown."+e);h.unbind("."+e).data("bPopup",0<h.data("bPopup")-1?h.data("bPopup")-1:null);c.undelegate(".bClose, ."+a.closeClass,"click."+e,q).data("bPopup",null);clearTimeout(I);H();return!1}function J(d){w=y.innerHeight||h.height();u=y.innerWidth||h.width();if(B=E())clearTimeout(K),K=setTimeout(function(){D();d=d||a.followSpeed;c.dequeue().each(function(){g?b(this).css({left:v,top:x}):b(this).animate({left:a.follow[0]?l(!0):"auto",top:a.follow[1]?n(!0):"auto"},d,a.followEasing)})},50)}function G(d){var b=d.width(),e=d.height(),f={};a.contentContainer.css({height:e,width:b});e>=c.height()&&(f.height=c.height());b>=c.width()&&(f.width=c.width());r=c.outerHeight(!0);s=c.outerWidth(!0);D();a.contentContainer.css({height:"auto",width:"auto"});f.left=l(!(!a.follow[0]&&m||g));f.top=n(!(!a.follow[1]&&p||g));c.animate(f,250,function(){d.show();B=E()})}function N(){h.data("bPopup",t);c.delegate(".bClose, ."+a.closeClass,"click."+e,q);a.modalClose&&b(".b-modal."+e).css("cursor","pointer").bind("click",q);O||!a.follow[0]&&!a.follow[1]||h.bind("scroll."+e,function(){B&&c.dequeue().animate({left:a.follow[0]?l(!g):"auto",top:a.follow[1]?n(!g):"auto"},a.followSpeed,a.followEasing)}).bind("resize."+e,function(){J()});a.escClose&&f.bind("keydown."+e,function(a){27==a.which&&q()})}function H(d){function b(e){c.css({display:"block",opacity:1}).animate(e,a.speed,a.easing,function(){L(d)})}switch(d?a.transition:a.transitionClose||a.transition){case "slideIn":b({left:d?l(!(!a.follow[0]&&m||g)):f.scrollLeft()-(s||c.outerWidth(!0))-C});break;case "slideBack":b({left:d?l(!(!a.follow[0]&&m||g)):f.scrollLeft()+u+C});break;case "slideDown":b({top:d?n(!(!a.follow[1]&&p||g)):f.scrollTop()-(r||c.outerHeight(!0))-C});break;case "slideUp":b({top:d?n(!(!a.follow[1]&&p||g)):f.scrollTop()+w+C});break;default:c.stop().fadeTo(a.speed,d?1:0,function(){L(d)})}}function L(b){b?(N(),k(F),a.autoClose&&(I=setTimeout(q,a.autoClose))):(c.hide(),k(a.onClose),a.loadUrl&&(a.contentContainer.empty(),c.css({height:"auto",width:"auto"})))}function l(a){return a?v+f.scrollLeft():v}function n(a){return a?x+f.scrollTop():x}function k(a,e){b.isFunction(a)&&a.call(c,e)}function D(){x=p?a.position[1]:Math.max(0,(w-c.outerHeight(!0))/2-a.amsl);v=m?a.position[0]:(u-c.outerWidth(!0))/2;B=E()}function E(){return w>c.outerHeight(!0)&&u>c.outerWidth(!0)}b.isFunction(z)&&(F=z,z=null);var a=b.extend({},b.fn.bPopup.defaults,z);a.scrollBar||b("html").css("overflow","hidden");var c=this,f=b(document),y=window,h=b(y),w=y.innerHeight||h.height(),u=y.innerWidth||h.width(),O=/OS 6(_\d)+/i.test(navigator.userAgent),C=200,t=0,e,B,p,m,g,x,v,r,s,K,I;c.close=function(){q()};c.reposition=function(a){J(a)};return c.each(function(){b(this).data("bPopup")||(k(a.onOpen),t=(h.data("bPopup")||0)+1,e="__b-popup"+t+"__",p="auto"!==a.position[1],m="auto"!==a.position[0],g="fixed"===a.positionStyle,r=c.outerHeight(!0),s=c.outerWidth(!0),a.loadUrl?M():A())})};b.fn.bPopup.defaults={amsl:50,appending:!0,appendTo:"body",autoClose:!1,closeClass:"b-close",content:"ajax",contentContainer:!1,easing:"swing",escClose:!0,follow:[!0,!0],followEasing:"swing",followSpeed:500,iframeAttr:'scrolling="no" frameborder="0"',loadCallback:!1,loadData:!1,loadUrl:!1,modal:!0,modalClose:!0,modalColor:"#000",onClose:!1,onOpen:!1,opacity:.7,position:["auto","auto"],positionStyle:"absolute",scrollBar:!0,speed:250,transition:"fadeIn",transitionClose:!1,zIndex:9997}})(jQuery);


$( ".order" ).click(function() {
  $('.recall-modal').bPopup();          
});
$( ".leave-response" ).click(function() {
  $('.client-modal').bPopup();          
});
// hover captions 





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
// menu scroll 
// http://plugins.compzets.com/animatescroll/#
/* Coded by Ramswaroop */
(function(e){e.easing["jswing"]=e.easing["swing"];e.extend(e.easing,{def:"easeOutQuad",swing:function(t,n,r,i,s){return e.easing[e.easing.def](t,n,r,i,s)},easeInQuad:function(e,t,n,r,i){return r*(t/=i)*t+n},easeOutQuad:function(e,t,n,r,i){return-r*(t/=i)*(t-2)+n},easeInOutQuad:function(e,t,n,r,i){if((t/=i/2)<1)return r/2*t*t+n;return-r/2*(--t*(t-2)-1)+n},easeInCubic:function(e,t,n,r,i){return r*(t/=i)*t*t+n},easeOutCubic:function(e,t,n,r,i){return r*((t=t/i-1)*t*t+1)+n},easeInOutCubic:function(e,t,n,r,i){if((t/=i/2)<1)return r/2*t*t*t+n;return r/2*((t-=2)*t*t+2)+n},easeInQuart:function(e,t,n,r,i){return r*(t/=i)*t*t*t+n},easeOutQuart:function(e,t,n,r,i){return-r*((t=t/i-1)*t*t*t-1)+n},easeInOutQuart:function(e,t,n,r,i){if((t/=i/2)<1)return r/2*t*t*t*t+n;return-r/2*((t-=2)*t*t*t-2)+n},easeInQuint:function(e,t,n,r,i){return r*(t/=i)*t*t*t*t+n},easeOutQuint:function(e,t,n,r,i){return r*((t=t/i-1)*t*t*t*t+1)+n},easeInOutQuint:function(e,t,n,r,i){if((t/=i/2)<1)return r/2*t*t*t*t*t+n;return r/2*((t-=2)*t*t*t*t+2)+n},easeInSine:function(e,t,n,r,i){return-r*Math.cos(t/i*(Math.PI/2))+r+n},easeOutSine:function(e,t,n,r,i){return r*Math.sin(t/i*(Math.PI/2))+n},easeInOutSine:function(e,t,n,r,i){return-r/2*(Math.cos(Math.PI*t/i)-1)+n},easeInExpo:function(e,t,n,r,i){return t==0?n:r*Math.pow(2,10*(t/i-1))+n},easeOutExpo:function(e,t,n,r,i){return t==i?n+r:r*(-Math.pow(2,-10*t/i)+1)+n},easeInOutExpo:function(e,t,n,r,i){if(t==0)return n;if(t==i)return n+r;if((t/=i/2)<1)return r/2*Math.pow(2,10*(t-1))+n;return r/2*(-Math.pow(2,-10*--t)+2)+n},easeInCirc:function(e,t,n,r,i){return-r*(Math.sqrt(1-(t/=i)*t)-1)+n},easeOutCirc:function(e,t,n,r,i){return r*Math.sqrt(1-(t=t/i-1)*t)+n},easeInOutCirc:function(e,t,n,r,i){if((t/=i/2)<1)return-r/2*(Math.sqrt(1-t*t)-1)+n;return r/2*(Math.sqrt(1-(t-=2)*t)+1)+n},easeInElastic:function(e,t,n,r,i){var s=1.70158;var o=0;var u=r;if(t==0)return n;if((t/=i)==1)return n+r;if(!o)o=i*.3;if(u<Math.abs(r)){u=r;var s=o/4}else var s=o/(2*Math.PI)*Math.asin(r/u);return-(u*Math.pow(2,10*(t-=1))*Math.sin((t*i-s)*2*Math.PI/o))+n},easeOutElastic:function(e,t,n,r,i){var s=1.70158;var o=0;var u=r;if(t==0)return n;if((t/=i)==1)return n+r;if(!o)o=i*.3;if(u<Math.abs(r)){u=r;var s=o/4}else var s=o/(2*Math.PI)*Math.asin(r/u);return u*Math.pow(2,-10*t)*Math.sin((t*i-s)*2*Math.PI/o)+r+n},easeInOutElastic:function(e,t,n,r,i){var s=1.70158;var o=0;var u=r;if(t==0)return n;if((t/=i/2)==2)return n+r;if(!o)o=i*.3*1.5;if(u<Math.abs(r)){u=r;var s=o/4}else var s=o/(2*Math.PI)*Math.asin(r/u);if(t<1)return-.5*u*Math.pow(2,10*(t-=1))*Math.sin((t*i-s)*2*Math.PI/o)+n;return u*Math.pow(2,-10*(t-=1))*Math.sin((t*i-s)*2*Math.PI/o)*.5+r+n},easeInBack:function(e,t,n,r,i,s){if(s==undefined)s=1.70158;return r*(t/=i)*t*((s+1)*t-s)+n},easeOutBack:function(e,t,n,r,i,s){if(s==undefined)s=1.70158;return r*((t=t/i-1)*t*((s+1)*t+s)+1)+n},easeInOutBack:function(e,t,n,r,i,s){if(s==undefined)s=1.70158;if((t/=i/2)<1)return r/2*t*t*(((s*=1.525)+1)*t-s)+n;return r/2*((t-=2)*t*(((s*=1.525)+1)*t+s)+2)+n},easeInBounce:function(t,n,r,i,s){return i-e.easing.easeOutBounce(t,s-n,0,i,s)+r},easeOutBounce:function(e,t,n,r,i){if((t/=i)<1/2.75){return r*7.5625*t*t+n}else if(t<2/2.75){return r*(7.5625*(t-=1.5/2.75)*t+.75)+n}else if(t<2.5/2.75){return r*(7.5625*(t-=2.25/2.75)*t+.9375)+n}else{return r*(7.5625*(t-=2.625/2.75)*t+.984375)+n}},easeInOutBounce:function(t,n,r,i,s){if(n<s/2)return e.easing.easeInBounce(t,n*2,0,i,s)*.5+r;return e.easing.easeOutBounce(t,n*2-s,0,i,s)*.5+i*.5+r}});e.fn.animatescroll=function(t){var n=e.extend({},e.fn.animatescroll.defaults,t);if(typeof n.onScrollStart=="function"){n.onScrollStart.call(this)}if(n.element=="html,body"){var r=this.offset().top;e(n.element).stop().animate({scrollTop:r-n.padding},n.scrollSpeed,n.easing)}else{e(n.element).stop().animate({scrollTop:this.offset().top-this.parent().offset().top+this.parent().scrollTop()-n.padding},n.scrollSpeed,n.easing)}setTimeout(function(){if(typeof n.onScrollEnd=="function"){n.onScrollEnd.call(this)}},n.scrollSpeed)};e.fn.animatescroll.defaults={easing:"swing",scrollSpeed:800,padding:0,element:"html,body"}})(jQuery)
// menu scroll options
$( ".menu-item-15 a" ).click(function() {
  $('#wrapper').animatescroll();
});
$( ".menu-item-16 a" ).click(function() {
  $('#delivery').animatescroll();
});
$( ".menu-item-17 a" ).click(function() {
  $('#actions').animatescroll();
});
$( ".menu-item-18 a" ).click(function() {
  $('#productions').animatescroll();
});
$( ".menu-item-19 a" ).click(function() {
  $('#aboutus').animatescroll();
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
