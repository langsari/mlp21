<?php

/** 
 * BuduEngine - A Delicious PHP Framework
 * 
 * @package  BuduEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

	function connect_db() {
		$host = "localhost:8889";
		$username = "root";
		$password = "root";
		$db = "fst-feedback-v1";

	//@mysql_connect($host, $username, $password) or die("MySQL Connection Failed");
	//@mysql_select_db($db) or die("MySQL Select Database Failed");
	//mysql_query("SET NAMES utf8") or die(mysql_error());

	mysql_connect($host, $username, $password)
			or die("MySQL Connection Failed");
	mysql_select_db($db) or die("MySQL Select Database Failed");
	mysql_query("SET NAMES utf8") or die(mysql_error());
}

function mysql_inject($username_inject, $password_inject) {	
	$username_inject = stripslashes($username_inject);
	$password_inject = stripslashes($password_inject);
	$username_inject = mysql_real_escape_string($username);
	$password_inject = mysql_real_escape_string($password);
}

function random_password() {
	$text = "abcdefghijklmnopqrstuvwxyz0123456789";

	return substr(str_shuffle($text), 0, 7);
}

function send_mail($from, $to, $subject, $body, $cc = "", $bcc = "",
		$attach = "") {
	//	To
	$sto = $to;

	//	Subject
	$ssubject = "=?UTF-8?B?" . base64_encode($subject) . "?=";

	//	Body & Header
	//	Body, Type
	if ($attach == "" || $attach["size"] == 0) {
		$sbody = stripslashes($body);
		$sheader = "MIME-Version: 1.0\n"
				. "Content-type: text/html; charset=utf-8\n";
	} else {
		$type = $attach["type"];
		$name = $attach["name"];
		$size = $attach["size"];
		$tname = $attach["tmp_name"];

		$file = fopen($tname, "r");
		$data = fread($file, $size);
		$data = chunk_split(base64_encode($data . "\n"));
		fclose($file);

		$boundary = uniqid("");
		$sbody = "--$boundary\n" . "Content-type: text/html; charset=utf-8;\n"
				. "Content-transfer-encoding: 16bit\n\n" . stripslashes($body)
				. "\n" . "--$boundary\n" . "Content-type: $type; name=$name\n"
				. "Content-transfer-encoding: base64\n\n" . $data
				. "--$boundary--";
		$sheader = "MIME-Version: 1.0\n"
				. "Content-type: multipart/mixed; boundary=\"$boundary\"\n";
	}

	//	From, CC, BCC
	$sheader .= "From: $from";

	if ($cc != "") {
		$sheader .= "\nCc: $cc";
	}

	if ($bcc != "") {
		$sheader .= "\nBcc: $bcc";
	}

	return mail($sto, $ssubject, $sbody, $sheader);
}

function check_login($name, $dest) {
	if (!isset($_SESSION[$name])) {
		header("location:$dest");
		return;
	}
}

function login($name, $dest) {
	if (isset($_SESSION[$name])) {
		header("location:$dest");
		return;
	}
}

?>
