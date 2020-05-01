<?php
/*
Plugin Name: Google Analytics
Plugin URI: https://github.com/bobaweb/wordpress-google-analytics
Description: Adds the Google analytics tracking code to <head>
Author: Cristian Boba
Version: 2.0
*/

function wp_add_google_analytics() { ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-HERE"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-HERE');
	</script>
<?php }
add_action( 'wp_head', 'wp_add_google_analytics', 10 );
