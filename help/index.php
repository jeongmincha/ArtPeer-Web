<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	session_start();

	require_once('../lib/php/output_functions.php');

	do_html_header('아트피어 | 문의하기');
	display_navigation('help');
?>
	<div class="wrap">
<?php
?>
	</div>
<?php
	do_html_footer();
?>