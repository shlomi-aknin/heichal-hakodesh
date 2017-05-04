<?php
function nice_dump($var) {
	echo '<pre class="ltr">';
	print_r(var_dump($var));
	echo '</pre>';
}
function logit($var) {
	error_log(print_r($var,true));
}
function cleanString(&$string) {
		global $db;
		if(is_array($string)){
			foreach($string as $key=>$val){
				$string[$key] = cleanString($val);
			}
			return $string;
		} else {
			$detagged = strip_tags($string);
			if(get_magic_quotes_gpc()) {
					$stripped = stripslashes($detagged);
					$escaped = $db->escape($stripped);
			} else {
					$escaped = $db->escape($detagged);
			}
			return $escaped;
		}
}
function defDate($date) {
	return date('d/m/Y', strtotime($date));
}
?>