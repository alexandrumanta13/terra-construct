<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo has_content('title') ? y_ield('title', false)  : ''; ?></title>
	<meta name="description" content="<?php echo has_content('meta') ? y_ield('meta', false)  : ''; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="<?php echo $config['base_url']; ?>">
	


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T4PQ2VR');</script>
<!-- End Google Tag Manager -->







	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
		href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
		href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/elegant_font/elegant_font.min.css" rel="stylesheet">
	<link href="css/fontello/css/fontello.min.css" rel="stylesheet">
	<link href="css/magnific-popup.min.css" rel="stylesheet">

	<!-- LayerSlider stylesheet -->
	<link href="layerslider/css/layerslider.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
	<link href="css/skins/square/grey.css" rel="stylesheet">

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T4PQ2VR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div id="preloader">
		<div class="sk-spinner sk-spinner-wave">
			<div class="sk-rect1"></div>
			<div class="sk-rect2"></div>
			<div class="sk-rect3"></div>
			<div class="sk-rect4"></div>
			<div class="sk-rect5"></div>
		</div>
	</div><!-- End Preload -->

	<div class="layer"></div><!-- Mobile menu overlay mask -->
	<?php y_ield(); ?>

	<!-- Common scripts -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts_min.js"></script>
	<script src="js/functions.js"></script>

	<!-- LayerSlider script files -->
	<script src="layerslider/js/greensock.js"></script>
	<script src="layerslider/js/layerslider.transitions.js"></script>
	<script src="layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
	<script src="js/slider_func.js"></script>

	<!-- Specific scripts -->
	<script src="js/jquery.validate.js"></script>
	<script src="js/jquery.stepy.min.js"></script>
	<script src="js/quotation-validate.js"></script>

	<!-- GOOGLE MAP -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDc3LRykbLB-y8MuomRUIY0qH5S6xgBLX4"></script>
	<script type="text/javascript" src="js/map.js"></script>
	<!-- <script type="text/javascript" src="js/mapmarker.jquery.js"></script>
	<script type="text/javascript" src="js/mapmarker_func.jquery.js"></script> -->

	<!-- Form validation -->
	<script src="assets/validate.js"></script>


	<!-- SPECIFIC SCRIPTS -->
	<script>
		'use strict';
		$(".team-carousel").owlCarousel({
			items: 1,
			loop: true,
			margin: 10,
			autoplay: false,
			smartSpeed: 300,
			responsiveClass: false,
			responsive: {
				320: {
					items: 1,
				},
				768: {
					items: 2,
				},
				1000: {
					items: 3,
				}
			}
		});
	</script>
	<?php if ($config['google_analytics_web_property_id'] != ''): ?>
	<script>
		var _gaq = [
			['_setAccount', '<?php echo $config['
				google_analytics_web_property_id ']; ?>'
			],
			['_trackPageview']
		];
		(function (d, t) {
			var g = d.createElement(t),
				s = d.getElementsByTagName(t)[0];
			g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g, s)
		}(document, 'script'));
	</script>
	<?php endif; ?>


</body>

</html>