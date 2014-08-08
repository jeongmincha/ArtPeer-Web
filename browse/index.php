<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	session_start();

	require_once('../lib/php/output_functions.php');

	do_html_header('아트피어 | 작품 둘러보기');
	display_navigation('browse');
?>
	<div class="wrap">
<?php
	display_recommendation_window();
	category_in_browse();
?>
	</div>
<?php
	do_html_footer();
?>