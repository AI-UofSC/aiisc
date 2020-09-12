<?php
session_cache_limiter('private, must-revalidate');
session_start();


if(isset($_REQUEST['page'])){
	$page = $_REQUEST['page'];
}else{
	$page = 0;
}

include("plugin.php");
include($root."globals.php");
include($root."top.php");

include("header.php");

$main= "main_".$page.".php";

include($main);

include("footer.php");

include($root."bottom.php");

?>