<?php

	require_once "../../requires-sd/config-sd.php";

	require_once DIR_CLASS."freelancer_wallet-sd.lib.php";

	$data = new stdClass();
	
	
	$msgType = $_SESSION["msgType"] = disMessage(array('type'=>'suc','var'=>'Transaction done'));
	redirectPage(SITE_URL."financial-dashboard");
 	
	
?>