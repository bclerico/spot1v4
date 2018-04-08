<?php
//echo "starting index<br/>";
//create session
session_start();
//$_SESSION['status'] = 0;
$_SESSION['from'] = "index.php";
$_SESSION['goto'] = "home_01.php";

$ini_array = parse_ini_file("watchmyspot.ini");
error_log ("watchmyspot.ini[db_host_name]:" .  $ini_array['db_host_name']);
error_log ("watchmyspot.ini[db_port]:" .  $ini_array['db_port']);
error_log ("watchmyspot.ini[db_user_id]:" .  $ini_array['db_user_id']);
error_log ("watchmyspot.ini[db_password]:" .  $ini_array['db_password']);
error_log ("watchmyspot.ini[db_name]:" .  $ini_array['db_name']);
error_log ("watchmyspot.ini[google_maps_api_key]:" .  $ini_array['google_maps_api_key']);

$_SESSION['db_host_name'] = $ini_array['db_host_name'];
$_SESSION['db_port'] = $ini_array['db_port'];
$_SESSION['db_user_id'] = $ini_array['db_user_id'];
$_SESSION['db_password'] = $ini_array['db_password'];
$_SESSION['db_name'] = $ini_array['db_name'];
$_SESSION['google_maps_api_key'] = $ini_array['google_maps_api_key'];

header("Location: ".$_SESSION['goto']);
?>