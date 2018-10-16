<?php
/**
 * Created by Nguyen Ngoc Nam.
 * User: Nguyen Ngoc Nam
 * Website: https://github.com/namtenten
 * Date: 2018/10/16
 * Time: 09:50
 */

function getDevice($ua){
	if(strpos($ua,'iPhone') !== false){
		//iPhone
		return 'iPhone';
	}elseif(strpos($ua,'iPad') !== false){
		//iPad
		return 'iPad';
	}elseif((strpos($ua,'Android') !== false) && (strpos($ua, 'Mobile') !== false)){
		//Android
		return 'Android Mobile';
	}elseif(strpos($ua,'Android') !== false){
		//Android
		return 'Android Tablet';
	}else{
		return 'PC';
	}
}

//ログ
function writeLog($message){
	if(!define("DEBUG_LOG_PATH")){
		define("DEBUG_LOG_PATH", "/tmp/");
	}
	$fp = fopen(DEBUG_LOG_PATH . "app.log", "a");
	fwrite($fp, $message . PHP_EOL);
	fclose($fp);
}

function hr($color = "#000000"){
	$style = " style=\"border:1px solid " . $color . ";\"";
	$html = '<hr ' . $style . '>';
	echo $html . PHP_EOL;
}

function br(){
	$html = '<br>';
	echo $html . PHP_EOL;
}

//現在のタイムスタンプ
function getYYMMDDHHMMSSUU(){
	//microtimeを.で分割
	$arrTime = explode('.',microtime(true));
	return date('ymdHis', $arrTime[0]) . substr($arrTime[1], 0, 2);
}

function e($value='') // laravel - e function
{
	$value = htmlentities($value);
	return $value;
}

function htmlEcho($value='', $echo = true)
{
	$value = nl2br(e($value));
	if($echo){
		echo $value;
	}
	return $value;
}

function current_url()
{
	return $_SERVER['PHP_SELF'];
}

function json($data)
{
	header('content-type: application/json; charset=utf-8');
	$json = json_encode($data);
	echo $json;
	exit;
}

// Function to get the client IP address
function getClientIp() {
	$ipaddress = '';
	if (isset($_SERVER['HTTP_CLIENT_IP']))
		$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else if(isset($_SERVER['HTTP_X_FORWARDED']))
		$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
		$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	else if(isset($_SERVER['HTTP_FORWARDED']))
		$ipaddress = $_SERVER['HTTP_FORWARDED'];
	else if(isset($_SERVER['REMOTE_ADDR']))
		$ipaddress = $_SERVER['REMOTE_ADDR'];
	else
		$ipaddress = 'UNKNOWN';
	return $ipaddress;
}

function startWith(string $haystack, string $needle)
{
	 $length = mb_strlen($needle);
	 return (mb_substr($haystack, 0, $length) === $needle);
}

function endWith(string $haystack, string $needle)
{
	$length = mb_strlen($needle);
	if ($length == 0) {
		return true;
	}

	return (mb_substr($haystack, -$length) === $needle);
}

function color(string $text = '', string $color='#000000')
{
	echo '<font color="' . $color . '">' . $text . '</font>';
}

function delete(string $path)
{
	array_map('unlink', array_filter((array) glob($path)));
}
