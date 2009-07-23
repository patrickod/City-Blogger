<?php

if(file_exists("conf.php"))
{
	require('conf.php');
	global $lnSiteUrl;
	header( "HTTP/1.1 301 Moved Permanently" ); 
	header("Location: ".$lnSiteUrl."/blog"); 
}
else
{
	echo "You need to configure you're config files first!";
}

?>
