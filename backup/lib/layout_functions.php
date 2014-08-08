<?php
	function html_start ($title){
?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko"  xml:lang="ko">
	<head>
		<meta http-equiv="Content-Type" Content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale =1"/>
		<meta name="author" content="JeongMin Cha"/>
		<title><?php echo $title; ?></title>
		<link href="./lib/js-image-slider.css" rel="stylesheet" type="text/css"/>
		<script src="./lib/js-image-slider.js" type="text/javascript"></script>
	</head>
	<body>
<?php 
	} // END OF html_start
	function html_end (){
?>
	</body>
</html>
<?php
	}
?>