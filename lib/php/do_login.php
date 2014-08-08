<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	echo "<meta charset=\"UTF-8\">";

	session_start();
	require_once("../../lib/php/artpeer_functions.php");
	// db_connect();

	try {
		if (!filled_out($_POST)) {
			throw new Exception('폼을 제대로 입력하지 않았습니다.');
		}
		if (isset($_POST['email']) && isset($_POST['password'])){	
			$email = $_POST['email'];
			$password = $_POST['password'];

			// Open the database.
			// $db_conn = new mysqli('localhost', 'artpeer_manager', 'art9236peer', 'artpeer_db');
			$db_conn = db_connect();
			// Error Handling.
			if (mysqli_connect_errno()){
				throw new Exception('Connection to database failed: '.mysqli_connect_errno());
				exit ();
			}
			// Find the account with given email and password.
			$query = "select * from user where email='".$email."' and password=sha1('$password')";
			$result = $db_conn->query($query);
			// If there's the account, register the session variable. (Start the session!)
			if ($result->num_rows) {
				$_SESSION['valid_user'] = $email;
			} else { // If there's no account...
				throw new Exception('입력한 이메일과 비밀번호에 맞는 계정이 없습니다.');
			}
			// Close the database.
			$db_conn->close();
		}		

		header("Location: ../..");
  	exit();
	}
	catch (Exception $e) {
		echo $e->getMessage();
?>
 <a href="javascript:history.go(-1)">[뒤로가기]</a> 
<?php
	}
?>