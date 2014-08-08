<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	require_once("../lib/php/artpeer_functions.php");
	db_connect();

	echo "<meta charset=\"UTF-8\">";
	$email = $_POST['email'];
	$password = $_POST['password'];
	$checking_password = $_POST['checking_password'];
	session_start();

	try {
		if (!filled_out($_POST)) {
			throw new Exception('이메일과 비밀번호를 모두 입력하지 않았습니다.');
		}

		if (!valid_email($email)) {
			throw new Exception('유효하지 않은 이메일 주소입니다.');
		}

		if ($password != $checking_password) {
			throw new Exception('비밀번호와 확인 비밀번호가 일치하지 않습니다.');
		}

		if ((strlen ($password) < 6) || (strlen ($password) > 16)) {
			throw new Exception('비밀번호는 6~16자리로 구성되어야 합니다.');
		}

		register ($email, $password);
		$_SESSION['valid_user'] = $email;
?>
	<script>
		alert("가입이 완료되었습니다. 감사합니다.");
		location.href="..";
	</script>
<?php
  	exit();
	}
	catch (Exception $e) {
?>
	<script>
		alert("<?php echo $e->getMessage();?>");
		history.go(-1);
	</script>
<?php
	}
?>