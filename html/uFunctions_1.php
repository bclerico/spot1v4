<?php function db_query($sql_str="", $host_name="localhost", $user_id="********", $password="********", $db_name="test", $port="3306") {	error_log("sql_str:" . $sql_str . "<br />");/*	error_log("hostname:" . $host_name . "<br />");	error_log("port:" . $port . "<br />");	error_log("user_id:" . $user_id . "<br />");	error_log("password:" . $password . "<br />");	error_log("db_name:" . $db_name . "<br />");*/	error_reporting(E_ALL);	if (strlen(trim($sql_str)) > 0) {		$mysqli = new mysqli($host_name, $user_id, $password, $db_name, $port);		if ($mysqli->connect_errno) {			echo "mysqli_connect ERROR:";			echo $mysqli->connect_errno . ":" . $mysqli->connect_error . "<br/>";			exit;		}				$rs = $mysqli->query($sql_str);				if ($rs->num_rows > 0) {			return $rs;		}		else {			if ($mysqli->affected_rows > 0) {				return true;			}			else {				return "";			}		}	}}function dto() {	return Date("YmdHis");}function insert_css($css="tundra") {	$str = "<link rel=\"stylesheet\" type=\"text/css\" href=\"./dojoroot/dijit/themes/".$css."/".$css.".css\" />";	$str = $str . "<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/cssform.css\" />";	$str = $str . "<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/default_v2.css\" />";		return $str;}function insert_dojo() {	return "<script type=\"text/javascript\" src=\"./dojoroot/dojo/dojo.js\" djConfig=\"parseOnLoad: true, isDebug: false\"></script>";}function insert_nav($current) {	$nav = "<span class='nav'>";		//home	if ($current != "home") {		$nav = $nav . "<a href='home_01.php'>Home</a>&nbsp;|&nbsp;";	}	else {		$nav = $nav . "Home&nbsp;|&nbsp;";	}		//console	if ($current != "console") {		$nav = $nav . "<a href='cons_01.php'>Console</a>&nbsp;|&nbsp;";	}	else {		$nav = $nav . "Console&nbsp;|&nbsp;";	}		//expeditions	if ($current != "expeditions") {		$nav = $nav . "<a href='exped_01.php'>Expeditions</a>&nbsp;|&nbsp;";	}	else {		$nav = $nav . "Expeditions&nbsp;|&nbsp;";	}		//profile	if ($current != "profile") {		$nav = $nav . "<a href='prof_01.php'>Profile</a>&nbsp;|&nbsp;";	}	else {		$nav = $nav . "Profile&nbsp;|&nbsp;";	}		//donate	if ($current != "donate") {		$nav = $nav . "<a href='donate_01.php'>Donate</a>&nbsp;|&nbsp;";	}	else {		$nav = $nav . "Donate&nbsp;|&nbsp;";	}		//help	if ($current != "help") {		$nav = $nav . "<a href='help_01.php'>Help</a>&nbsp;";	}	else {		$nav = $nav . "Help&nbsp;";	}		//content	if ((isset($_SESSION['uid'])) && ($_SESSION['uid'] == "bclerico")) {		if ($current != "content") {			$nav = $nav . "|&nbsp;<a href='content_01.php'>Content</a>&nbsp;";		}		else {			$nav = $nav . "|&nbsp;Content&nbsp;";		}	}		$nav = $nav . "<br /></span>";		return $nav;}?>