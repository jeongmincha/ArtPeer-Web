<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	session_start();

	require_once('../lib/php/output_functions.php');

	do_html_header('아트피어');
	display_navigation('main');
?>
	<div class="wrap">
<?php
	display_main_explains('main');
?>
	</div>
<?php
	display_footer();
	do_html_footer();
?>