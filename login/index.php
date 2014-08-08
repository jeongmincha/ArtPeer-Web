<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	session_start();

	require_once('../lib/php/output_functions.php');

	do_html_header('아트피어 | 로그인하기');
		if (isset($_SESSION['valid_user'])) {
		display_home_navigation_after_login('login');
	}
	else {
		display_navigation('login');
	}
?>
	<div class="wrap">
<?php
	display_login_form();
?>
	</div>
<?php
	do_html_footer();
?>