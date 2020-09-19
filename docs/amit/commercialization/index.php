<?php

if(isset($_REQUEST['page'])){
	$page = $_REQUEST['page'];
}else{
	$page = 0;
}

include("plugin.php");
include($root."globals.php");
include($root."top.php");

//if(!$_GET["page"] && ($_GET["entityID"]) || ($_GET["semanticEntityID"])) $page = 4;

include("header.php");

$main= "main_".$page.".php";

include($main);

include("footer.php");


//import bottom: do not edit
include($root."bottom.php");

?>
