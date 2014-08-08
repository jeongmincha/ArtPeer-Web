<?php
	require_once('../lib/php/output_functions.php');

	session_start();


	do_html_header('아트피어');
	display_navigation('my_page');
?>
<div class="wrap">
<?php
	display_logout ();
?>
</div>
<?php
	unset($_SESSION['valid_user']);
	session_destroy();
?>
