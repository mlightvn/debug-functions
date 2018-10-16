<?php
/**
 * Created by Nguyen Ngoc Nam.
 * User: Nguyen Ngoc Nam
 * Website: https://github.com/namtenten
 * Date: 2018/10/16
 * Time: 09:50
 */

/**
 * set SMARTY_DIR to absolute path to Smarty library files.
 * Sets SMARTY_DIR only if user application has not already defined it.
 */
if (!defined('NAM_DEBUG_MODE')) {
	define('NAM_DEBUG_MODE', TRUE);
}

function d($data = NULL, $is_output = true, $is_html_encode = true){
	if(NAM_DEBUG_MODE === FALSE)return '';

	if(is_null($data)){
		$str = "<font color='red'><i>NULL</i></font>";
	}elseif($data === ""){
		$str = "<font color='red'><i>Empty string</i></font>";
	}elseif(is_array($data)){
		if(count($data) == 0){
			$str = "<font color='red'><i>Empty array.</i></font>";
		}else{
			$str = "<table style=\"border-bottom:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;\" cellpadding=\"0\" cellspacing=\"0\">";
			foreach ($data as $key => $value) {
				$str .= "<tr><td style=\"background-color:#00AA00;color:#FFF;border-top:1px solid #000;border-right:1px solid #000;padding-left:5px;padding-right:5px;\">" . $key . "</td><td style=\"border-top:1px solid #000;padding:5px;\">" . d($value, false) . "</td></tr>";
			}
			$str .= "</table>";
		}
	}elseif(is_resource($data)){
		while($arr = mssql_fetch_array($data)){
			$data_array[] = $arr;
		}
		$str = d($data_array, false);
	}elseif(is_object($data)){
		$str = d(get_object_vars($data), false);
	}elseif(is_numeric($data) && (gettype($data) !== "string")){
		$str = "<font color='red'><i>" . $data . "</i></font>";
	}elseif(is_bool($data) && ($data === true || $data === false)){
		$str = "<font color='red'><i>" . (($data === true) ? "True" : "False") . "</i></font>";
	}else{
		$str = $data;
		if($is_html_encode){
			$str = htmlspecialchars($str);
		}
		$str = preg_replace("/\n/", "<br>\n", $str);
	}

	if($is_output){
		echo $str;
	}
	return $str;
}

function dl($data = NULL, $is_html_encode = true){
	d($data, true, $is_html_encode);
	echo "<br>\n";
}

function dd($data = NULL, $is_html_encode = true){
	dl($data, $is_html_encode);
	exit;
}

function dt($message = ""){
	dl("[" . date("Y/m/d H:i:s") . "]" . $message);
}

function debugMessage($message){
	dt($message);
}
