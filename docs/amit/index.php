<?php

$page = 0;

include("plugin.php");
include($root."globals.php");
include($root."top.php");

include("header.php");

$main= "main_".$page.".php";

include($main);

//include("footer.php");


//import bottom: do not edit
include($root."bottom.php");

?>
