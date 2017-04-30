//<![CDATA[
!function(e){var t={animation:"dissolve",separator:",",speed:2e3};e.fx.step.textShadowBlur=function(t){e(t.elem).prop("textShadowBlur",t.now).css({textShadow:"0 0 0 black"})};e.fn.textrotator=function(n){var r=e.extend({},t,n);return this.each(function(){var t=e(this);var n=[];e.each(t.text().split(r.separator),function(e,t){n.push(t)});t.text(n[0]);var i=function(){switch(r.animation){case"dissolve":t.animate({textShadowBlur:20,opacity:0},500,function(){s=e.inArray(t.text(),n);if(s+1==n.length)s=-1;t.text(n[s+1]).animate({textShadowBlur:0,opacity:1},500)});break;case"flip":if(t.find(".back").length>0){t.html(t.find(".back").html())}var i=t.text();var s=e.inArray(i,n);if(s+1==n.length)s=-1;t.html("");e("<span class='front'>"+i+"</span>").appendTo(t);e("<span class='back'>"+n[s+1]+"</span>").appendTo(t);t.wrapInner("<span class='rotating' />").find(".rotating").hide().addClass("flip").show().css({"-webkit-transform":" rotateY(-180deg)","-moz-transform":" rotateY(-180deg)","-o-transform":" rotateY(-180deg)",transform:" rotateY(-180deg)"});break;case"flipUp":if(t.find(".back").length>0){t.html(t.find(".back").html())}var i=t.text();var s=e.inArray(i,n);if(s+1==n.length)s=-1;t.html("");e("<span class='front'>"+i+"</span>").appendTo(t);e("<span class='back'>"+n[s+1]+"</span>").appendTo(t);t.wrapInner("<span class='rotating' />").find(".rotating").hide().addClass("flip up").show().css({"-webkit-transform":" rotateX(-180deg)","-moz-transform":" rotateX(-180deg)","-o-transform":" rotateX(-180deg)",transform:" rotateX(-180deg)"});break;case"flipCube":if(t.find(".back").length>0){t.html(t.find(".back").html())}var i=t.text();var s=e.inArray(i,n);if(s+1==n.length)s=-1;t.html("");e("<span class='front'>"+i+"</span>").appendTo(t);e("<span class='back'>"+n[s+1]+"</span>").appendTo(t);t.wrapInner("<span class='rotating' />").find(".rotating").hide().addClass("flip cube").show().css({"-webkit-transform":" rotateY(180deg)","-moz-transform":" rotateY(180deg)","-o-transform":" rotateY(180deg)",transform:" rotateY(180deg)"});break;case"flipCubeUp":if(t.find(".back").length>0){t.html(t.find(".back").html())}var i=t.text();var s=e.inArray(i,n);if(s+1==n.length)s=-1;t.html("");e("<span class='front'>"+i+"</span>").appendTo(t);e("<span class='back'>"+n[s+1]+"</span>").appendTo(t);t.wrapInner("<span class='rotating' />").find(".rotating").hide().addClass("flip cube up").show().css({"-webkit-transform":" rotateX(180deg)","-moz-transform":" rotateX(180deg)","-o-transform":" rotateX(180deg)",transform:" rotateX(180deg)"});break;case"spin":if(t.find(".rotating").length>0){t.html(t.find(".rotating").html())}s=e.inArray(t.text(),n);if(s+1==n.length)s=-1;t.wrapInner("<span class='rotating spin' />").find(".rotating").hide().text(n[s+1]).show().css({"-webkit-transform":" rotate(0) scale(1)","-moz-transform":"rotate(0) scale(1)","-o-transform":"rotate(0) scale(1)",transform:"rotate(0) scale(1)"});break;case"fade":t.fadeOut(r.speed,function(){s=e.inArray(t.text(),n);if(s+1==n.length)s=-1;t.text(n[s+1]).fadeIn(r.speed)});break}};setInterval(i,r.speed)})}}(window.jQuery)
//]]>
//<![CDATA[
!function(a){var c,d,b={},e=document,f=window,g=e.documentElement,h=a.expando;a.event.special.inview={add:function(c){b[c.guid+"-"+this[h]]={data:c,$element:a(this)}},remove:function(a){try{delete b[a.guid+"-"+this[h]]}catch(a){}}},a(f).bind("scroll resize",function(){c=d=null}),!g.addEventListener&&g.attachEvent&&g.attachEvent("onfocusin",function(){d=null}),setInterval(function(){var i,h=a(),j=0;if(a.each(b,function(a,b){var c=b.data.selector,d=b.$element;h=h.add(c?d.find(c):d)}),i=h.length){var k;if(!(k=c)){var l={height:f.innerHeight,width:f.innerWidth};l.height||!(k=e.compatMode)&&a.support.boxModel||(k="CSS1Compat"===k?g:e.body,l={height:k.clientHeight,width:k.clientWidth}),k=l}for(c=k,d=d||{top:f.pageYOffset||g.scrollTop||e.body.scrollTop,left:f.pageXOffset||g.scrollLeft||e.body.scrollLeft};j<i;j++)if(a.contains(g,h[j])){k=a(h[j]);var m=k.height(),n=k.width(),o=k.offset(),l=k.data("inview");if(!d||!c)break;o.top+m>d.top&&o.top<d.top+c.height&&o.left+n>d.left&&o.left<d.left+c.width?(n=d.left>o.left?"right":d.left+c.width<o.left+n?"left":"both",m=d.top>o.top?"bottom":d.top+c.height<o.top+m?"top":"both",o=n+"-"+m,(!l||l!==o)&&k.data("inview",o).trigger("inview",[!0,n,m])):l&&k.data("inview",!1).trigger("inview",[!1])}}},250)}(jQuery),jQuery(document).ready(function(a){"use strict";/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)?a(".animation").removeClass("animation"):a(".animation").each(function(){var a=jQuery(this),b=a.attr("data-animate");a.bind("inview",function(c,d,e,f){d&&(a.css("visibility","visible"),a.addClass(b),b.indexOf("fade")===-1&&a.css("opacity","1"))})});var b=!1;a(".navToggle, #menu ul li a").click(function(){b?(a(".navToggle").toggleClass("open"),a("section").toggleClass("ifmenu"),setTimeout("$('#menu').toggleClass('active');",1400),setTimeout(function(){a("#menu ul li").each(function(b){var c=a(this);setTimeout(function(){c.toggleClass("active")},100*(b+1))})},400),setTimeout("$('.bgblack').toggleClass('active');",1500)):(a(this).toggleClass("open"),a(".bgblack").toggleClass("active"),a("section").toggleClass("ifmenu"),setTimeout("$('#menu').toggleClass('active');",200),setTimeout(function(){a("#menu ul li").each(function(b){var c=a(this);setTimeout(function(){c.toggleClass("active")},100*(b+1))})},400)),b=!b}),a(".scroll-down img").on("click",function(){return a("html,body").animate({scrollTop:a(window).height()+8},{duration:"1000"}),!1}),a(".text-rotator").each(function(){a(this).find(".rotate").textrotator({separator:"|",speed:4e3})}),a(".site-loader").delay(1010).fadeOut("slow")});
//]]>