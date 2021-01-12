<!doctype html>
<html lang="en" class="no-js">
<head>
	<title>@yield('title', 'Home Page')</title>
	<meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/studiare-assets.min.css">
	<link rel="stylesheet" type="text/css" href="css/fonts/font-awesome/font-awesome.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/fonts/elegant-icons/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/fonts/iconfont/material-icons.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
    <div class="mainContainer">
        @yield('header')
        @yield('banner')
        @yield('content')
    </div>
    <script src="js/studiare-plugins.min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script type="text/javascript" src="js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="js/extensions/revolution.extension.parallax.min.js"></script>
	<script>
		var tpj=jQuery;
		var revapi202;
		tpj(document).ready(function() {
			if (tpj("#rev_slider_202_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_202_1");
			} else {
				revapi202 = tpj("#rev_slider_202_1").show().revolution({
					sliderType: "standard",
					jsFileLocation: "js/",
					dottedOverlay: "none",
					delay: 5000,
					navigation: {
						keyboardNavigation: "off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation: "off",
						onHoverStop: "off",
						arrows: {
					        enable: true,
					        style: 'gyges',
					        left: {
					            container: 'slider',
					            h_align: 'left',
					            v_align: 'center',
					            h_offset: 20,
					            v_offset: -60
					        },

					        right: {
					            container: 'slider',
					            h_align: 'right',
					            v_align: 'center',
					            h_offset: 20,
					            v_offset: -60
					        }
					    },
						touch: {
							touchenabled: "on",
							swipe_threshold: 75,
							swipe_min_touches: 50,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						},
						bullets: {

					        enable: false,
					        style: 'persephone',
					        tmp: '',
					        direction: 'horizontal',
					        rtl: false,

					        container: 'slider',
					        h_align: 'center',
					        v_align: 'bottom',
					        h_offset: 0,
					        v_offset: 55,
					        space: 7,

					        hide_onleave: false,
					        hide_onmobile: false,
					        hide_under: 0,
					        hide_over: 9999,
					        hide_delay: 200,
					        hide_delay_mobile: 1200
 						}
					},
					responsiveLevels: [1210, 1024, 778, 480],
					visibilityLevels: [1210, 1024, 778, 480],
					gridwidth: [1210, 1024, 778, 480],
					gridheight: [700, 700, 600, 600],
					lazyType: "none",
					parallax: {
						type: "scroll",
						origo: "slidercenter",
						speed: 1000,
						levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
						type: "scroll",
					},
					shadow: 0,
					spinner: "off",
					stopLoop: "off",
					stopAfterLoops: -1,
					stopAtSlide: -1,
					shuffle: "off",
					autoHeight: "off",
					fullScreenAutoWidth: "off",
					fullScreenAlignForce: "off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "0px",
					disableProgressBar: "on",
					hideThumbsOnMobile: "off",
					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					debugMode: false,
					fallbacks: {
						simplifyAll: "off",
						nextSlideOnWindowFocus: "off",
						disableFocusListener: false,
					}
				});
			}
		}); /*ready*/
	</script>
</body>


