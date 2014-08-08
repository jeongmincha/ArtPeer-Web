<?php
/* 
 * Author: Jeong Min Cha, Technology Manager @ Art Peer
 * Final Update Date: 31, July, 2014.
 *
 */
  require_once("../lib/php/artpeer_functions.php");

function do_html_header($title) {
  // print an HTML header
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title;?></title>
  <meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Art Peer" />
	<meta name="keywords" content="Art, peer, Art" />
	<meta name="author" content="Jeong Min Cha" />
  <link rel="stylesheet" type="text/css" href="../lib/css/style.css" />
  <link rel="stylesheet" type="text/css" href="../lib/css/component.css" />
  <link rel="stylesheet" type="text/css" href="../lib/css/button.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="../lib/js/mouse-event.js"></script>
  <script language="javascript" type="text/javascript"> 
  $(document).ready(function(){ 
    // $('#sec1').fadeIn(500); 
    // $('#sec2').fadeIn(500); 
    // $('#sec3').fadeIn(500); 
  }); 
  </script> 
</head>
<body>
<div class="container">
<?php
}

function do_html_footer() {
  // print an HTML footer
?>
</div>
</body>
</html>
<?php
}

function html_URL_link($url, $name) {
  // output URL as link and br
?>
  <br /><a href="<?php echo $url;?>"><?php echo $name;?></a><br />
<?php
}

function display_navigation ($position) {
  if (!isset($_SESSION['valid_user'])){
    display_navigation_before_login ($position);
  } else {
    display_navigation_after_login ($position);
  }
}

function display_navigation_before_login($position) {
  // In all pages, displays home navigation bar.
?>
<nav class="home-navigation">
  <div class="navigation-content">
    <a href="../main" class="logo"><img src="../lib/images/Art-peer-logo.png" align="left" /></a>
    <div class="right-fix">
      <ul id="normal-nav">
        <li><a href="../join" class="btn-hover-blue <?php if($position === 'join'){echo 'selected';}?>">가입하기</a></li>
        <li><a href="../browse" class="btn-hover-blue <?php if($position === 'browse'){echo 'selected';}?>">작품 둘러보기</a></li>
        <li><a href="../help" class="btn-hover-blue <?php if($position === 'help'){echo 'selected';}?>">문의하기</a></li>
        <li><a href="javascript: void(0);" onclick="AppearLoginWindow();" class="btn-hover-blue <?php if($position === 'login'){echo 'selected';}?>">로그인하기</a></li>
      </ul>
      <table id="login-nav" style="display:none;">
        <tr>
          <td>
            <form method="post" action="../lib/php/do_login.php">
              이메일:&nbsp;<input type="text" name="email" />&nbsp;
              비밀번호:&nbsp;<input type="password" name="password" />
              <button class="nav-small-button btn-hover-blue3" style="width:100px;">로그인하기</button>
            </form>
          </td>
          <td>
            <button class="nav-small-button btn-hover-blue2" onclick="AppearNavigation();">X</button>
          </td>
        </tr>
      </table>
    </div>
  </div>
</nav> <!-- End of Navigation Bar -->
<?php
}

function display_navigation_after_login($position) {
  // In all pages, displays home navigation bar.
?>
<nav class="home-navigation">
  <div class="navigation-content">
    <a href="../main" class="logo"><img src="../lib/images/Art-peer-logo.png" align="left" /></a>
    <div class="right-fix">
      <ul>
        <li><a href="../browse" class="btn-hover-blue <?php if($position === 'browse'){echo 'selected';}?>">작품 둘러보기</a></li>
        <li><a href="../help" class="btn-hover-blue <?php if($position === 'help'){echo 'selected';}?>">문의하기</a></li>
        <li><a href="../my_page" class="btn-hover-blue <?php if($position === 'my_page'){echo 'selected';}?>">나의 페이지</a></li>
      </ul>
    </div>
  </div>
</nav> <!-- End of Navigation Bar -->
<?php
}

function display_main_explains() {
  // In first main page, cool explainations with cool texts and images.
?>
<div class="home-main-explain">
  <section class="side-section" id="sec1">
    <div class="text-content side-content">
      <h2>많은 미술작품들.</h2>
      <p>아트피어에서 ~~명의 작가들과 ~~개의 작품들을 선택할 수 있습니다. <br />원하는 작품을 골라보세요.</p>
      <button class="btn btn-hover-blue" onclick="location.href='../browse' ">작품 둘러보기</button>
    </div>
    <div class="side-content">
      <img src="../lib/images/1.png" />
    </div>
  </section>
  <section class="side-section" id="sec2">
    <div class="side-content left-side-img">
      <img src="../lib/images/1.png" />
    </div>
    <div class="text-content side-content right-side-text">
      <h2>~~~</h2>
      <p>아트피어에서 ~~명의 작가들과 ~~개의 작품들을 선택할 수 있습니다. <br />원하는 작품을 골라보세요.</p>
      <button class="btn btn-hover-blue" onclick="location.href='../quiz' ">나에게 맞는 작품 알아보기</button>
    </div>
  </section>
  <section class="side-section" id="sec3">
    <div class="text-content side-content">
      <h2>~~~.</h2>
      <p>아트피어에서 ~~명의 작가들과 ~~개의 작품들을 선택할 수 있습니다. <br />원하는 작품을 골라보세요.</p>
      <button class="btn btn-hover-blue" onclick="location.href='../join' ">아트피어 가입하기</button>
    </div>
    <div class="side-content">
      <img src="../lib/images/1.png" />
    </div>
  </section>
</div>
<?php  
}

function display_register_form() {
?>
<form method="post" class="join-window" action="register_new_user.php">
  <h1>가입하기<br/><span>이름과 비밀번호만으로 <span class="blue">아트피어</span>를 시작할 수 있습니다.<br /><br /></span></h1>
  <p>이메일:<br /></p><input type="text" name="email" class="join-email" /><br />
  <p>비밀번호: (6~16자리의 영문과 숫자 조합)<br /></p><input type="password" name="password" class="join-password" /><br />
  <p>비밀번호 확인:<br /></p><input type="password" name="checking_password" class="join-password" /><br />
  <input type="submit" class="join-button" value="가입하기" />
</form><!-- End of Register Form-->
<?php
}

function display_login_form() {
?>
<form method="post" class="login-window" action="../main/index.php">
  <h1>로그인하기<br /><br /></h1>
  <div class="login-email-window">
  <p>이메일:<br /></p><input type="text" name="email" class="login-email" /><br />
  </div>
  <div class="login-password-window">
  <p>비밀번호:<br /></p><input type="password" name="password" class="login-password" /><br />
  </div>
  <input type="submit" class="login-button" value="로그인하기" /><br />
</form><!-- End of Register Form-->
<?php
}

function display_footer () {
?>
<div class="cool-footer">
  <a href="https://www.facebook.com/artpeer92/"><img class="contact-icon" src="../lib/images/Facebook.png" /></a>
  <a href="https://www.facebook.com/artpeer92/"><img class="contact-icon" src="../lib/images/Twitter.png" /></a>
  <a href="https://www.facebook.com/artpeer92/"><img class="contact-icon" src="../lib/images/Google+.png" /></a>
  <p> Copyright © ARTPEER </p>
</div>
<?php
}

function display_logout () {
?>
  <button class="btn btn-hover-blue" onclick="location.href='../' ">로그아웃하기</button>
<?php
}

function category_in_browse () {
?>
<div class="category-in-browse">
  <ul>
    <li><a href="#1">카테고리 1</a></li>
    <li><a href="#2">카테고리 2</a></li>
    <li><a href="#3">카테고리 3</a></li>
    <li><a href="#4">카테고리 4</a></li>
  </ul>
</div>
<?php
}

function display_art_window() {
?>
  <iframe id="art-window">
  </iframe>
<?php
}

function display_recommendation_window() {
  // algorithm to select items...
?>
<section id="recommendation-window">
  <!-- <h2>Recommendation window</h2> -->
  <ul>
    <li><?php display_art_frame(1); ?></li>
    <li><?php display_art_frame(2); ?></li>
    <li><?php display_art_frame(3); ?></li>
    <li><?php display_art_frame(4); ?></li>
  </ul>
</section>
<?php
}

function display_art_frame($photo_id) {
  // get an image from db.
  // $db_conn = db_connect();
  // ...
?>
  <div class="frame">
    <center>
      <img src="../lib/images/<?php echo $photo_id; ?>.png" class="content-in-frame" / >
    </center>
  </div>
<?php
}
?>