<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	require_once('../lib/php/output_functions.php');

	do_html_header('아트피어 | 가입하기');
	display_navigation('join');
?>
	<div class="wrap">
<?php
	display_register_form();	
?>
	</div>
<?php
	do_html_footer();
?>