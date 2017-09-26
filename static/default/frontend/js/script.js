function include(scriptUrl) {
    document.write('<script src="' + rootBaseUrl+scriptUrl + '"></script>');
}
function include2(scriptUrl) {
    document.write('<script src="' + scriptUrl + '"></script>');
}
function changeMyLanguage(){
	var key = $('.national-flag').attr('key');
	if(key == 'vn'){
		key = 'en';
		$('.national-flag').attr('src', rootBaseUrl+'media/images/eng.svg');
		$('.national-flag').attr('key', key);
	} else {
		key = 'vn';
		$('.national-flag').attr('src', rootBaseUrl+'media/images/vn.svg');
		$('.national-flag').attr('key', key);
	}
	var pathname = window.location.pathname;
	if(pathname.indexOf('/cnc') >= 0){
		pathname = pathname.replace('/cnc', '');
	}
	if(pathname.indexOf('/vn') >= 0){
		pathname = pathname.replace('/vn', '');
	}
	if(pathname.indexOf('/en') >= 0){
		pathname = pathname.replace('/en', '');
	}
	var newPath = rootBaseUrl.substring(0, rootBaseUrl.length-1);
	var pathKey = key;
	if(key == 'vn'){
		pathKey = '';
		newPath += pathname;
	} else{
		pathKey = key;
		newPath += '/'+pathKey+pathname;
	}
	try{
		console.log(newPath);
		history.pushState({}, null, newPath);
	} catch(exx){
		console.log(exx.message);
	}
	$('a[lang-key]').each(function(index) {
		  var ilang = key+'_'+$(this).attr('lang-key');
		  if (typeof(Storage) !== "undefined") {
			  var translate = localStorage.getItem(ilang);
			  if(typeof translate !== 'undefined' && translate != null){
				  $(this).text(translate);
				  var href = $(this).attr('href');
				  if(key == 'en' && href == rootBaseUrl){
					  href = href.replace(rootBaseUrl, rootBaseUrl+key+'/');
					  $(this).attr('href', href);
				  }
				  if(key == 'en' && href.indexOf('/en') < 0){
					  href = href.replace(rootBaseUrl, rootBaseUrl+key+'/');
					  $(this).attr('href', href);
				  }
				  if(key != 'en' && href.indexOf('/en') >= 0){
					  href = href.replace(rootBaseUrl+'en/', rootBaseUrl);
					  $(this).attr('href', href);
				  }
			  }
		  }
	});
}
function initLoading(dom){
    dom.block({
        message: '<i class="fa fa-spinner fa-pulse fa-fw"></i>',
        themedCSS: {
            width:  '30%',
            top:    '0%',
            left:   '0%'
        },
        css: {
            border: 'none',
            background: 'none',
            opacity: '0.1',
            color: '#ffffff'
        },
        overlayCSS:  { 
            backgroundColor: '#000', 
            opacity:         0.1, 
            cursor:          'wait' 
        }
    });
}
function destroyLoading(dom){
    dom.unblock();
}
function isScrolledIntoView(elem){
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = elem.offset().top;
    var elemBottom = elemTop + elem.height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}
var poolFinal = [];
function lazyLoadBackground(){
	$('div[bg-src]').each(function(index) {
		var that = $(this);
		poolFinal.push(that);
		initLoading(that.parent());
	});
	setTimeout(function(){
		queueLoadBackground(0);
	}, 10);
}
function queueLoadBackground(index){
	if(index >= poolFinal.length){
		return true;
	}
	var that = poolFinal[index];
	var backgroundSrc = that.attr('bg-src');
	that.css('background-image', 'url("'+backgroundSrc+'")');
	destroyLoading(that.parent());
	console.log(backgroundSrc);
	index++;
	setTimeout(function(){
		queueLoadBackground(index);
	}, 10);
}
function isIE() {
    var myNav = navigator.userAgent.toLowerCase();
    return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
};
include('static/default/frontend/js/jquery.cookie.js');
include('static/default/frontend/js/jquery.easing.1.3.js');;
(function($) {
    if (isIE() && isIE() < 11) {
        include('static/default/frontend/js/pointer-events.js');
        $('html').addClass('lt-ie11');
        $(document).ready(function() {
            PointerEventsPolyfill.initialize({});
        });
    }
})(jQuery);;
(function($) {
    var o = $('html');
    if (o.hasClass('desktop')) {
        include('static/default/frontend/js/tmstickup.js');
        $(document).ready(function() {
            $('#stuck_container').TMStickUp({})
        });
    }
})(jQuery);;
(function($) {
    var o = $('html');
    if (o.hasClass('desktop')) {
        include('static/default/frontend/js/jquery.ui.totop.js');
        $(document).ready(function() {
            $().UItoTop({
                easingType: 'easeOutQuart',
                containerClass: 'toTop fa fa-angle-up'
            });
        });
    }
})(jQuery);;
(function($) {
    var o = $('[data-equal-group]');
    if (o.length > 0) {
        include('static/default/frontend/js/jquery.equalheights.js');
    }
})(jQuery);;
(function($) {
    var currentYear = (new Date).getFullYear();
    $(document).ready(function() {
        $("#copyright-year").text((new Date).getFullYear());
    });
})(jQuery);;
/*(function($) {
    var o = document.getElementById("google-map");
    if (o) {
        include2('//maps.google.com/maps/api/js?key=AIzaSyB5z32jqH-C7gxnIwak042HEObgIUAU04E');
        include('static/default/frontend/js/jquery.rd-google-map.js');
        $(document).ready(function() {
            var o = $('#google-map');
            if (o.length > 0) {
                o.googleMap({
                    styles: [{
                        "stylers": [{
                            "hue": "#ff1a00"
                        }, {
                            "invert_lightness": true
                        }, {
                            "saturation": -100
                        }, {
                            "lightness": 33
                        }, {
                            "gamma": 0.5
                        }]
                    }, {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#2D333C"
                        }]
                    }]
                });
            }
        });
    }
})
(jQuery);;*/
(function($) {
    include('static/default/frontend/js/superfish.js');
})(jQuery);;
(function($) {
    include('static/default/frontend/js/jquery.rd-navbar.js');
})(jQuery);;
(function($) {
    var o = $('html');
    if ((navigator.userAgent.toLowerCase().indexOf('msie') == -1) || (isIE() && isIE() > 9)) {
        if (o.hasClass('desktop')) {
            include('static/default/frontend/js/wow.js');
            $(document).ready(function() {
                new WOW().init();
            });
        }
    }
})(jQuery);
$(function() {
    var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
        ua = navigator.userAgent,
        gestureStart = function() {
            viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
        },
        scaleFix = function() {
            if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
                viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
                document.addEventListener("gesturestart", gestureStart, false);
            }
        };
    scaleFix();
    if (window.orientation != undefined) {
        var regM = /ipod|ipad|iphone/gi,
            result = ua.match(regM);
        if (!result) {
            $('.sf-menus li').each(function() {
                if ($(">ul", this)[0]) {
                    $(">a", this).toggle(function() {
                        return false;
                    }, function() {
                        window.location.href = $(this).attr("href");
                    });
                }
            })
        }
    }
});
var ua = navigator.userAgent.toLocaleLowerCase(),
    regV = /ipod|ipad|iphone/gi,
    result = ua.match(regV),
    userScale = "";
if (!result) {
    userScale = ",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0' + userScale + '">');;
(function($) {
    var o = $('#subscribe-form');
    if (o.length > 0) {
        include('static/default/frontend/js/sForm.js');
    }
})(jQuery);;
(function($) {
    var o = $('#camera');
    if (o.length > 0) {
        if (!(isIE() && (isIE() > 9))) {
            include('static/default/frontend/js/jquery.mobile.customized.min.js');
        }
        include('static/default/frontend/js/camera.js');
        $(document).ready(function() {
            o.camera({
                autoAdvance: true,
                height: '40.0390625%',
                minHeight: '350px',
                pagination: false,
                thumbnails: false,
                playPause: false,
                hover: false,
                loader: 'none',
                navigation: true,
                navigationHover: true,
                mobileNavHover: false,
                fx: 'simpleFade'
            })
        });
    }
})(jQuery);;
(function($) {
    include('static/default/frontend/js/jquery.rd-parallax.js');
})(jQuery);;
(function($) {
    include('static/default/frontend/js/mailform/jquery.form.min.js');
    include('static/default/frontend/js/mailform/jquery.rd-mailform.min.js');
})(jQuery);
(function($) {
    setTimeout(function(){
    	lazyLoadBackground();
    }, 10);
//    $('.loading').remove();
})(jQuery);