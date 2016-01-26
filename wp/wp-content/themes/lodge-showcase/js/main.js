jQuery(document).ready(function($) {
	function smallScreenSetup(minwidthtoshow) {
		body = $("body");

		if ($(window).width() >= minwidthtoshow) {
			body.removeClass('smallscreen');
			//address.show();
		} else {
			body.addClass('smallscreen');
			//address.hide();
		}
	}

	$(document).ready(function() {
		smallScreenSetup(480);
	});

	$(window).resize(function() {
		smallScreenSetup(480);
	});

	$(window).load(function() {
		$('#slider').nivoSlider({
			effect: "random",
			animSpeed:1000,
			pauseTime:5000,
			randomStart: true,
			manualAdvance: false
		});
	});

	$(document).ready(function() {

		$("a.thumbnail").attr('rel', 'gallery').fancybox();

	});
});

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-30653981-1']);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
